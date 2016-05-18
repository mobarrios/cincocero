<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;

use App\Entities\motonet\Operations;
use App\Entities\motonet\Publications;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Helpers\TodoPago\lib\Sdk as todoPago;




class PayController extends Controller {


    public function ProcessPay(Request $request, TodoPagoController $tp)
    {

        if($request->price == 0)
            return redirect()->back()->withErrors('Seleccionar Importe a Abonar.');


        $publication        = Publications::find($_COOKIE['publication_id']);
        $client             = Clients::where('email',$request->email)->get();
        $operations         = Operations::all()->last();


        if(!is_null($operations)){
            if ($operations->count() != 0)
                $operation_id = $operations->id + 1;
        }else
            $operation_id = 1;


        if($client->count() == 0) {

            $new_client              = new Clients();
            $new_client->name        = $request->name;
            $new_client->last_name   = $request->last_name;
            $new_client->email       = $request->email;
            $new_client->phone       = $request->phone;
            $new_client->save();

            $client = $new_client;
        }else{

           $client =  $client->first();
        }

        if($request->pago == 'tp'){

            return $tp->getTp($request, $client, $publication, $operation_id);

        } elseif($request->pago == 'mp'){

            return $this->newOperationMercadoPago($request, $client, $publication, $operation_id);

        } elseif($request->pago == 'deposito'){

            $this->sendMail($request, $operation_id);
            $this->newOperationDeposito($request, $client, $operation_id);

            return redirect()->back()->withErrors('Se Enviara un mail con el numero de Cuenta para realizar el deposito correspondiente. Gracias.');

        } else {

            return redirect()->back()->withErrors('Seleccionar Metodo de Pago.');
        }


    }



    public function sendMail($request = null, $operation_id = null)
    {
        $data['operation_id']   = $operation_id;
        $data['mail']           = $request->email;
        $data['subject']        = 'Tu compra en MotoNET : COD. '.$operation_id ;
        $data['from']           = 'info@motonet.com';
        $data['client']         = $request->last_name .'_'.$request->name ;


        Mail::queue('emails.pay_deposito', $data, function($message) use($data)
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
        $operation->save();
    }


    public function newOperationMercadoPago($request = null , $client = null, $publication = null,  $operation_id = null){


        $mp  = new \App\Helpers\MercadoPago\Mp("315396166222597", "B8i2XAin03lDts4n0UQXmfMBVwWDTKd6");

        $mp->sandbox_mode(true);

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
                    "success" => "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/mp/success",
                    "failure" => "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/mp/failure",
                    "pending" => "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']))."/mp/pending"
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
       $operation->save();


        return redirect()->to($preference['response']['sandbox_init_point']);

    }

    public function mp(Request $request, $type = null)
    {
        $msg = $request->collection_status;

        if($msg == 'approved')
            return redirect()->route('resumen',$_COOKIE['publication_id'])->withErrors('Pago Aprobado');
        if($msg == 'pending')
            return redirect()->route('resumen',$_COOKIE['publication_id'])->withErrors('Pago Pendiente');
        if($msg == 'rejected')
            return redirect()->route('resumen',$_COOKIE['publication_id'])->withErrors('Pago Rechazado');

    }
}