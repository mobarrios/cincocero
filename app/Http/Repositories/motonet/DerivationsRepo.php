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
                'Fecha'     => ['data'=>'created_at' , 'relation' => null],
                'Cliente' =>  ['data' => 'Clients','relation' => 'fullName'],

                //'Estado' =>  ['data' => 'estado','relation' => null],

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

    public function getMedios()
    {
        $methods = [
            1 =>'WhatsApp',
            2 =>'MercadoLibre',
            3 =>'OLX',
            4 =>'Telefono',
            5 =>'Mail',
            6 =>'Autofoco',

        ];

        return $methods;
    }



}