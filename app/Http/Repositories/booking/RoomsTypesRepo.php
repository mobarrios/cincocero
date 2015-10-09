<?php

namespace App\Http\Repositories\booking;

use App\Entities\booking\RoomsTypes;
use App\Http\Repositories\BaseRepo;

class RoomsTypesRepo extends BaseRepo {

    public function getModel()
    {
        return new RoomsTypes;
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
           // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            //'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                'Tipo' =>    ['data' => 'name','relation' => null],
               // 'Tipo' =>['data' => 'RoomsTypes','relation' => 'name','id' ],
            ],
        ];

        return $header;
    }




}