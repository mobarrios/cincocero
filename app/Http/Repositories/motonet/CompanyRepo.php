<?php

namespace App\Http\Repositories\motonet;

use App\Entities\Company;
use App\Http\Repositories\BaseRepo;

class CompanyRepo extends BaseRepo {

    public function getModel()
    {
        return new Company();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            'brands_id' => 'required',
            'categories_id' => 'required',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            'brands_id' => 'required',
            'categories_id' => 'required',

        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Marca'  =>    ['data' => 'Brands','relation' => 'name'],
                'Modelo' =>    ['data' => 'name','relation' => null],
                'Categorias' =>     ['data' => 'Categories','relation' => 'name'],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}