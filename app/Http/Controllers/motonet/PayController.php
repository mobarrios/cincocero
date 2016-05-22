<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;
use App\Entities\motonet\Operations;
use App\Entities\motonet\Publications;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use App\Helpers\TodoPago\lib\Sdk as todoPago;
use Illuminate\Support\Facades\Session;


class PayController extends Controller {


    public function ProcessPay(Request $request, TodoPagoController $tp)
    {

        //$publication        = Publications::find($_COOKIE['publication_id']);

        $publication        = Publications::find(Cookie::get('publication_id'));
        $client             = Clients::where('email',$request->email)->get();
        $operations         = Operations::all()->last();

        if(!is_null($operations)){

            if ($operations->count() != 0)
                $operation_id = $operations->id + 1;
        }else
            $operation_id = 1;


        if($client->count() == 0) {

            $new_client              = new Clients();
            $new_client->dni         = $request->dni;
            $new_client->name        = $request->name;
            $new_client->last_name   = $request->last_name;
            $new_client->email       = $request->email;
            $new_client->phone       = $request->phone;
            $new_client->save();

            $client = $new_client;

        }else{
           $client =  $client->first();
        }


        //setcookie('operation_id', $operation_id , time() + (86400 * 30),$_SERVER['SERVER_NAME']);
        //setcookie('client_id', $client->id , time() + (86400 * 30), $_SERVER['SERVER_NAME']);

        Cookie::queue(Cookie::make('operation_id', $operation_id , 0));
        Cookie::queue(Cookie::make('client_id', $client->id , 0));


        if($request->pago == 'tp'){

            return $tp->getTp($request, $client, $publication, $operation_id);

        } elseif($request->pago == 'mp'){

            return $this->newOperationMercadoPago($request, $client, $publication, $operation_id);

        }else{

            $this->newOperationDeposito($request, $client, $operation_id);
            $this->sendMail();

            return redirect()->back()->withErrors('Se Enviara un mail con el numero de Cuenta para realizar el deposito correspondiente. Gracias.');
        }

    }



    public function sendMail()
    {

        //$publication    = Publications::find($_COOKIE['publication_id']);
        //$client         = Clients::find($_COOKIE['client_id']);
        //$operation      = Operations::find($_COOKIE['operation_id']);

        $publication    = Publications::find(Cookie::get('publication_id'));
        $client         = Clients::find(Cookie::get('client_id'));
        $operation      = Operations::find(Cookie::get('operation_id'));


        dd($publication);
        if($publication->Images->count() != 0 )
            $img = $publication->Models->Images->first()->image;
        else
            $img = null;

        //$data['operation_id']       = $_COOKIE['operation_id'];
        $data['operation_id']       = Cookie::get('operation_id');
        $data['mail']               = $client->email;
        //$data['subject']            = 'Tu compra en MotoNET : N° orden. '. $_COOKIE['operation_id'] ;
        $data['subject']            = 'Tu compra en MotoNET : N° orden. '. Cookie::get('operation_id') ;
        $data['from']               = 'prueba@motonet.com.ar';
        $data['client']             = $client->last_name .'_'.$client->name ;
        $data['publication_name']   = $publication->title;
        $data['publication_price']  = $publication->price;
        $data['image']              = $img;
        $data['total']              = $operation->amount;


        Mail::queue('emails.mail', $data, function($message) use($data)
        {
            $message->from($data['from']);
            $message->to($data['mail'], $data['client'])->subject($data['subject']);
        });
    }


    /**
     *
     */
    public function newOperationTodoPago($rta = null,  $client_id = null){

        $operation                    = new Operations();
        $operation->id                = $rta['Payload']['Answer']['OPERATIONID'];
        $operation->clients_id        = $client_id;
        $operation->medio_de_pago     = 1;
        $operation->amount            = $rta['Payload']['Request']['AMOUNT'];
        $operation->authorization_key = $rta['AuthorizationKey'];
        $operation->authorization_code= $rta['Payload']['Answer']['AUTHORIZATIONCODE'];
        $operation->status            = 2;
        $operation->publications_id   = $_COOKIE['publication_id'];
        $operation->save();
    }

    public function newOperationDeposito($request = null , $client = null,  $operation_id = null){

        $operation                    = new Operations();
        $operation->id                = $operation_id;
        $operation->clients_id        = $client->id;
        $operation->medio_de_pago     = 3;
        $operation->authorization_key = 'n/a';
        $operation->authorization_code= 'n/a';
        $operation->amount            = $request->price;
        $operation->status            = 2;
        $operation->publications_id   = $_COOKIE['publication_id'];

            $operation->save();
    }


    public function newOperationMercadoPago($request = null , $client = null, $publication = null,  $operation_id = null){


        $mp  = new \App\Helpers\MercadoPago\Mp("315396166222597", "B8i2XAin03lDts4n0UQXmfMBVwWDTKd6");

        if(env('MERCADO_PAGO_MODE') == 'sandbox'){

            $mp->sandbox_mode(true);
            $point = 'sandbox_init_point';

        }else{

            $point = 'init_point';
        }

        $preference_data = array(
            "items" => array(
                array(
                    "title" => $publication->title,
                    "quantity" => 1,
                    "currency_id" => "ARS", // Available currencies at: https://api.mercadopago.com/currencies
                    "unit_price" => intval($request->price),
                )
                ),
                    "back_urls" => array(
                    "success"   => env('MERCADO_PAGO_URL_SUCCESS'),
                    "failure"   => env('MERCADO_PAGO_URL_FAILURE'),
                    "pending"   => env('MERCADO_PAGO_URL_PENDING')
                ),
                    "auto_return" => "approved",
        );

        $preference = $mp->create_preference($preference_data);

        $operation                    = new Operations();
        $operation->id                = $operation_id;
        $operation->clients_id        = $client->id;
        $operation->medio_de_pago     = 2;
        $operation->authorization_key = 'n/a';
        $operation->authorization_code= 'n/a';
        $operation->amount            = $request->price;
        $operation->status            = 2;
        $operation->publications_id   = Cookie::get('publication_id');
        $operation->save();

        return redirect()->to($preference['response'][$point]);

    }

    public function mp(Request $request, $type = null)
    {
        $msg = $request->collection_status;

        if($msg == 'approved') {
            $this->sendMail();
            return redirect()->route('resumen', Cookie::get('publication_id'))->withErrors('Pago Aprobado');
        }
        if($msg == 'pending'){
            $this->sendMail();
            return redirect()->route('resumen',Cookie::get('publication_id'))->withErrors('Pago Pendiente');
        }
        if($msg == 'rejected'){
            return redirect()->route('resumen',Cookie::get('publication_id'))->withErrors('Pago Rechazado');
        }

    }
}