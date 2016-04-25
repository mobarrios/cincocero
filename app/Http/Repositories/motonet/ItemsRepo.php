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
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Codigo' =>    ['data' => 'code','relation' => null],
                'Articulo' =>  ['data' => 'name','relation' => null],
                'Catogorias' =>['data' => 'Categories','relation' => 'name'],
                'Modelo' =>    ['data' => 'Models','relation' => 'name'],
                'Marca' => ['data' => 'Brands','relation' => 'name']
                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}