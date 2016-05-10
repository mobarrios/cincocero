<?php

namespace App\Http\Controllers\motonet;

use App\Entities\motonet\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class PayController extends Controller {


    public function ProcessPay(Request $request)
    {

        if($request->price == 0)
            return redirect()->back()->withErrors('Seleccionar Importe a Abonar.');



    }

}