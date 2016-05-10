<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\Items;
use App\Http\Repositories\BaseRepo;

class ItemsRepo extends BaseRepo {

    public function getModel()
    {
        return new Items;
    }


    public function Rules()
    {
        return [
            'code'   => 'required|unique:items,code',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            'models_id'=> 'required',
            'n_motor' => 'required',
            'n_chasis' => 'required',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            'models_id' => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Codigo' =>    ['data' => 'code','relation' => null],
              //  'Articulo' =>  ['data' => 'name','relation' => null],
                'Modelo' =>    ['data' => 'Models','relation' => 'name'],
                'Marca' => ['data' => 'Marca','relation' => null],
                'Sucursal' =>['data' => 'Branches','relation' => 'name'],
                'Motor' =>['data' => 'n_motor','relation' => null],
                'Chasis' =>['data' => 'n_chasis','relation' => null],

            ],
        ];

        return $header;
    }




}