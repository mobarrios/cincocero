<?php

namespace App\Http\Repositories\ahgai;

use App\Entities\ahgai\Establecimientos;
use App\Http\Repositories\BaseRepo;

class EstablecimientosRepo extends BaseRepo {

    public function getModel()
    {
        return new Establecimientos;
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024',
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],
                'Establecimiento' =>  ['data' => 'name','relation' => null],
                //'Desc.' =>     ['data' => 'description','relation' => null],

                'Categoría' =>['data' => 'Categories','relation' => 'name'],
            ],
        ];

        return $header;
    }






}