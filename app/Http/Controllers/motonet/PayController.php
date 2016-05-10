<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PayController extends Controller {


    public function ProcessPay(Request $request, TodoPagoController $tp)
    {

        if($request->price == 0)
            return redirect()->back()->withErrors('Seleccionar Importe a Abonar.');

        if($request->pago == 'tp') {

            return $tp->getTp($request);

        }elseif($request->pago == 'mp'){

            return 'mp';

        }elseif($request->pago == 'deposito'){

            $this->sendMail($request->email);
            return redirect()->back()->withErrors('Se Enviara un mail con el numero de Cuenta para realizar el deposito correspondiente. Gracias.');

        } else {

            return redirect()->back()->withErrors('Seleccionar Metodo de Pago.');
        }

    }

    public function sendMail($mail = null){


        $data =  ['da','dada'];

        Mail::queue('emails.pay_deposito', $data, function($message) use($mail)
        {
            $message->from('elmasca@pito.com');
            $message->to('Joni.creatividad@gmail.com', 'John Smith')->subject('CHUPAMELAPIJORTA!');
        });



    }

}