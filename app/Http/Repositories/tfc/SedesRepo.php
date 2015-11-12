<?php

namespace App\Http\Repositories\tfc;

use App\Entities\tfc\Sedes;
use App\Http\Repositories\BaseRepo;

class SedesRepo extends BaseRepo {

    public function getModel()
    {
        return new Sedes;
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
            'address'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'address'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Sede' =>  ['data' => 'name','relation' => null],
                'Dir.' =>     ['data' => 'address','relation' => null],
                'Tel.' =>     ['data' => 'phone','relation' => null],


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}