<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\DerivationMessages;
use App\Http\Repositories\BaseRepo;

class DerivationMessagesRepo extends BaseRepo {

    public function getModel()
    {
        return new DerivationMessages();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'message'   => 'required'
           // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'message'   => 'required'
           // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],
                'Cliente' =>  ['data' => 'Clients','relation' => 'fullName'],

                'Estado' =>  ['data' => 'estado','relation' => null],
                'Usuario' =>  ['data' => 'Users','relation' => 'fullName'],
                'Observaciones' =>  ['data' => 'observaciones','relation' => null],
                //'Marca' =>     ['data' => 'Brands','relation' => 'name'],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }


    public function getStatus()
    {
        $methods = [
            1 =>'Pendiente',
            2 =>'Tomada',
            3 =>'Finalizada',
        ];

        return $methods;

    }



}