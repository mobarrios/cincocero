<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;

use App\Entities\motonet\Operations;
use App\Entities\motonet\Publications;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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

            return 'mp';

        } elseif($request->pago == 'deposito'){

            $this->sendMail($request);

            return redirect()->back()->withErrors('Se Enviara un mail con el numero de Cuenta para realizar el deposito correspondiente. Gracias.');

        } else {

            return redirect()->back()->withErrors('Seleccionar Metodo de Pago.');
        }



    }



    public function sendMail($request = null)
    {
        $data['mail']       =  $request->email;
        $data['subject']    = 'Tu compra en MotoNET';
        $data['from']       = 'info@motonet.com';
        $data['client']     = $request->last_name .'_'.$request->name ;


        Mail::queue('emails.pay_deposito', $data, function($message) use($data)
        {
            $message->from($data['from']);
            $message->to($data['mail'], $data['client'])->subject($data['subject']);
        });
    }


}