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

        if(is_null($request->pay_method))
            return redirect()->back()->withErrors('Seleccionar Metodo de Pago')->withInput();

        if($request->dni == "")
            return redirect()->back()->withErrors('Completar DNI')->withInput();

        if($request->last_name == "")
            return redirect()->back()->withErrors('Completar Apellido')->withInput();

        if($request->name == "")
            return redirect()->back()->withErrors('Completar Nombre')->withInput();

        if($request->state == "")
            return redirect()->back()->withErrors('Completar Provincia')->withInput();

        if($request->city == "")
            return redirect()->back()->withErrors('Completar Ciudad')->withInput();

        if($request->street == "")
            return redirect()->back()->withErrors('Completar Calle')->withInput();

        if($request->postal_code == "")
            return redirect()->back()->withErrors('Completar CP')->withInput();

        if($request->email == "")
            return redirect()->back()->withErrors('Completar Email')->withInput();

        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL))
            return redirect()->back()->withErrors('Completar Email valido ')->withInput();

        if($request->phone == "")
            return redirect()->back()->withErrors('Completar Tel.')->withInput();

        if(is_null($request->terms))
            return redirect()->back()->withErrors('debe Aceptar terminos y Condiciones')->withInput();




        $pm = explode('_',$request->pay_method);

        $request['pago']    = $pm[0];
        $request['price']   = $pm[1];


        if($request['pago'] == 'Todo Pago')
            $pago_id = 1;
        if($request['pago'] == 'Mercado Pago')
            $pago_id = 2;
        if($request['pago'] == 'Efectivo / Deposito')
            $pago_id = 3;




        //$publication = Publications::find($_COOKIE['publication_id']);
        // $publication        = Publications::find(Cookie::get('publication_id'));

        $publication    = Publications::find($request->publication_id);
        $client         = Clients::where('email', $request->email)->get();
        $operations     = Operations::all()->last();

        /*
        if (!is_null($operations)) {
            if ($operations->count() != 0)
                $operation_id = $operations->id + 1;
        } else
            $operation_id = 1;

        */

        if ($client->count() == 0) {

            $new_client             = new Clients();
            $new_client->dni        = $request->dni;
            $new_client->name       = $request->name;
            $new_client->last_name  = $request->last_name;
            $new_client->email      = $request->email;
            $new_client->phone      = $request->phone;
            $new_client->address    = $request->street . ',' . $request->city;
            $new_client->save();

            $client = $new_client;

        } else {

            $client = $client->first();
        }

        $operation = new Operations();
        $operation->clients_id = $client->id;
        $operation->medio_de_pago = $pago_id;
        $operation->amount = $request->price ;
        $operation->publications_id = $request->publication_id;
        $operation->save();


       //setcookie('operation_id', $operation_id, time() + (86400 * 30), '/');
       //setcookie('client_id', $client->id, time() + (86400 * 30), '/');

        //Session::put('client_id', $client->id);
        //Session::put('operation_id', $operation_id);

        //$_SESSION['client_id']      = $client->id;
        //$_SESSION['operation_id']   = $operation_id;




        if ($request->pago == 'Todo Pago') {
            //return $tp->getTp($request, $client, $publication, $operation_id);
            return $tp->getTp($request,$client,$publication, $operation->id);

        } elseif ($request->pago == 'Mercado Pago') {

           // return $this->newOperationMercadoPago($request, $client, $publication, $operation_id);
            return $this->newOperationMercadoPago($request,$client, $publication, $operation->id);

        } else {

            //$this->newOperationDeposito($request, $client, $operation_id);
            $this->newOperationDeposito($request,$client, $operation->id);

            $this->sendMail($operation->id);

            return redirect()->back()->withInput()->withErrors('Se Enviara un mail con el numero de Cuenta para realizar el deposito correspondiente. Gracias.')->with('fbq', $operation->amount);
        }



    }



    public function sendMail($operation_id )
    {


        //$publication    = Publications::find($_COOKIE['publication_id']);
        //$client         = Clients::find($_COOKIE['client_id']);
        //$operation      = Operations::find($_COOKIE['operation_id']);

        $operation      = Operations::find($operation_id);
        $publication    = Publications::find($operation->publications_id);
        $client         = Clients::find($operation->clients_id);



        if($publication->Images->count() != 0 )
            $img = $publication->Images->first()->image;

        elseif($publication->Models->Images->count() != 0)
            $img = $publication->Models->Images->first()->image;

        else
            $img = null;


        /*
        //$data['operation_id']     = $_COOKIE['operation_id'];
        $data['operation_id']       = Session::get('operation_id');
        $data['mail']               = $client->email;
       // $data['subject']          = 'Tu compra en MotoNET : N° orden. '. $_COOKIE['operation_id'] ;
        $data['subject']            = 'Tu compra en MotoNET : N° orden. '. Session::get('operation_id') ;
        $data['from']               = 'prueba@motonet.com.ar';
        $data['client']             = $client->last_name .'_'.$client->name ;
        $data['publication_name']   = $publication->title;
        $data['publication_price']  = $publication->price;
        $data['image']              = $img;
        $data['total']              = $operation->amount;

        */

        $data['operation_id']       = $operation->id;
        $data['mail']               = $client->email;
        $data['subject']            = 'Tu compra en MotoNET : N° orden. '. $operation->id ;
        $data['from']               = 'prueba@motonet.com.ar';
        $data['client_name']        = $client->full_name;
        $data['client_dni']         = $client->dni;
        $data['client_email']       = $client->email;
        $data['client_address']     = $client->address;
        $data['client_phone']       = $client->phone;
        $data['client_cell_phone']  = $client->cell_phone;

        $data['publication_title']  = $publication->title;
        $data['publication_price']  = $publication->price;
        $data['publication_brands'] = $publication->Models->Brands->name;
        $data['publication_models'] = $publication->Models->name;

        $data['operation_medio_pago'] = $operation->MedioPago;
        $data['operation_amount']     = $operation->amount;
        $data['image']                = $img;


        Mail::queue('emails.mail', $data , function($message) use($data)
        {
            $message->from($data['from']);
            $message->to($data['mail'], $data['client_name'])->subject($data['subject'])->cc('info@motonet.com.ar');
        });
    }


    /**
     *
     */
    public function newOperationTodoPago($rta = null,  $operation_id = null){

        /*
        $operation                         = new Operations();

        if($rta['StatusCode'] == -1){

            $operation->id                 = $rta['Payload']['Answer']['OPERATIONID'];
            $operation->authorization_code = $rta['Payload']['Answer']['AUTHORIZATIONCODE'];
            $operation->authorization_key  = $rta['AuthorizationKey'];
            $operation->amount             = $rta['Payload']['Request']['AMOUNT'];

        }else{
            $operation->amount             = 0;
        }


        $operation->clients_id        = $client_id;
        $operation->medio_de_pago     = 1;
        $operation->status            = 2;
        $operation->publications_id   = $_COOKIE['publication_id'];
        //$operation->publications_id   = Session::get('publication_id');
        $operation->save();
        */

        $operation = Operations::find($operation_id);

        if($rta['StatusCode'] == -1){

            //$operation->id                 = $rta['Payload']['Answer']['OPERATIONID'];
            $operation->authorization_code = $rta['Payload']['Answer']['AUTHORIZATIONCODE'];
            $operation->authorization_key  = $rta['AuthorizationKey'];
            $operation->amount             = $rta['Payload']['Request']['AMOUNT'];
            $operation->status = 1;

        }else{

            $operation->amount = 0;
        }
            $operation->message = $rta['StatusMessage'];
            $operation->save();

        //return redirect()->route('resumen',$operation->publications_id)->withErrors($rta['StatusMessage']);
        return redirect()->back()->withInput()->withErrors($rta['StatusMessage'])->with('fbq', $operation->amount);

    }

    public function newOperationDeposito($request = null , $client = null,  $operation_id = null){

        //$operation                    = new Operations();

        $operation                      = Operations::find($operation_id);
       // $operation->id                = $operation_id;
       // $operation->clients_id        = $client->id;
        $operation->medio_de_pago       = 3;
        $operation->authorization_key   = 'n/a';
        $operation->authorization_code  = 'n/a';
        $operation->amount              = $request->price;
        $operation->status              = 2;
        $operation->message             = "Pendiente de Desposito";
        //$operation->publications_id   = $_COOKIE['publication_id'];
        //$operation->publications_id   = Session::get('publication_id');

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
                    "success"   => env('MERCADO_PAGO_URL_SUCCESS').'/'.$operation_id,
                    "failure"   => env('MERCADO_PAGO_URL_FAILURE').'/'.$operation_id,
                    "pending"   => env('MERCADO_PAGO_URL_PENDING').'/'.$operation_id
                ),
                    "auto_return" => "approved",
        );

        $preference = $mp->create_preference($preference_data);

        //$operation                    = new Operations();
        $operation                      = Operations::find($operation_id);
        //$operation->id                = $operation_id;
        //$operation->clients_id        = $client->id;
        $operation->medio_de_pago       = 2;
        $operation->authorization_key   = 'n/a';
        $operation->authorization_code  = 'n/a';
        $operation->amount              = $request->price;
        $operation->status              = 1;
        //$operation->publications_id   = $_COOKIE['publication_id'];
        //$operation->publications_id   = ;

        $operation->save();


//        return redirect()->to($preference['response'][$point]);
        return redirect()->to($preference['response'][$point])->withInput()->withErrors('Se realizó el pago correctamente. Gracias.')->with('fbq', $operation->amount);

    }

    public function mp(Request $request, $type = null, $operation_id = null)
    {

        $msg = $request->collection_status;
        
        $operation  = Operations::find($operation_id);


        if($msg == 'approved') {
            $this->sendMail($operation_id);
            //return redirect()->route('resumen', $_COOKIE['publication_id'])->withInput()->withErrors('Pago Aprobado');
            $operation->message = $msg;
            $operation->status  = 2;
            $operation->request_key = $request->collection_id;
            $operation->save();

            return redirect()->route('resumen', $operation->publications_id)->withInput()->withErrors('Pago Aprobado');

        }
        if($msg == 'pending'){
            $this->sendMail($operation_id);
            $operation->message = $msg;
            $operation->status  = 3;
            $operation->request_key = $request->collection_id;
            $operation->save();

            //return redirect()->route('resumen',$_COOKIE['publication_id'])->withInput()->withErrors('Pago Pendiente');
            return redirect()->route('resumen', $operation->publications_id)->withInput()->withErrors('Pago Pendiente');

        }
        if($msg == 'rejected'){
            //return redirect()->route('resumen',$_COOKIE['publication_id'])->withInput()->withErrors('Pago Rechazado');
            $operation->message = $msg;
            $operation->request_key = $request->collection_id;
            $operation->status  = 3;
            $operation->save();

            return redirect()->route('resumen', $operation->publications_id)->withInput()->withErrors('Pago Rechazado');

        }
        if($msg == 'failure'){
            //return redirect()->route('resumen',$_COOKIE['publication_id'])->withInput()->withErrors('Pago Fallo');
            $operation->message = $msg;
            $operation->request_key = $request->collection_id;
            $operation->status = 1;
            $operation->save();

            return redirect()->route('resumen', $operation->publications_id)->withInput()->withErrors('Pago Fallo');

        }
    }
}