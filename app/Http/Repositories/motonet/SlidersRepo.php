<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\Sliders;
use App\Http\Repositories\BaseRepo;

class SlidersRepo extends BaseRepo {

    public function getModel()
    {
        return new Sliders;
    }


    public function Rules()
    {
        return [
            'description'   => 'string',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'description'   => 'string',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Descripcion' =>    ['data' => 'description','relation' => null],
            ],
        ];

        return $header;
    }




}