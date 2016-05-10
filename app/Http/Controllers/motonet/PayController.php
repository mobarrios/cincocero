<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class PayController extends Controller {


    public function ProcessPay(Request $request, TodoPagoController $tp)
    {

        if($request->price == 0)
            return redirect()->back()->withErrors('Seleccionar Importe a Abonar.');

        if($request->pago == 'tp')
            return  $tp->getTp($request);

        elseif($request->pago == 'mp')
            return 'mp';

        elseif($request->pago == 'deposito')
            return 'deposito';

        else
            return redirect()->back()->withErrors('Seleccionar Metodo de Pago.');

    }

}