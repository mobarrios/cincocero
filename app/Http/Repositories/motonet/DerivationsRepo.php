<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\Derivations;
use App\Http\Repositories\BaseRepo;

class DerivationsRepo extends BaseRepo {

    public function getModel()
    {
        return new Derivations();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'observaciones'   => 'required',
            'status'   => 'required',
           // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'observaciones'   => 'required',
            'status'   => 'required',
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
                'DNI' =>  ['data' => 'dni','relation' => null],

                'Apellido Nombre ' =>  ['data' => 'fullName','relation' => null],
                'Email' =>  ['data' => 'email','relation' => null],
                //'Marca' =>     ['data' => 'Brands','relation' => 'name'],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}