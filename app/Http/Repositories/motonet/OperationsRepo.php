<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\Operations;
use App\Http\Repositories\BaseRepo;

class OperationsRepo extends BaseRepo {

    public function getModel()
    {
        return new Operations();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
               // 'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],
               // 'Modelo' =>  ['data' => 'name','relation' => null],
                //'Marca' =>     ['data' => 'Brands','relation' => 'name'],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],

                'Fecha' => ['data'=>'created_at','relation' => null],
                'Cliente' => ['data' => 'Cliente', 'relation' => null],
                'Total' => ['data' => 'amount' ,'relation' => null],
                'Modo de Pago'=> ['data' => 'MedioPago' ,'relation' => null],
                'Estado' => ['data'=>'status','relation' => null],
            ],
        ];

        return $header;
    }




}