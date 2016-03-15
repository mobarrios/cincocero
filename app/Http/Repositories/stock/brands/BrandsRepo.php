<?php

namespace App\Http\Repositories\stock\brands;

use App\Entities\stock\Brands;
use App\Http\Repositories\BaseRepo;

class BrandsRepo extends BaseRepo {

    public function getModel()
    {
        return new Brands;
    }


    public function Rules()
    {
        return [
<<<<<<< HEAD
            //'code'   => 'required|unique:items,code',
            'name'   => 'required'
=======
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
>>>>>>> f1b98233366ecf4d2ac81e49abe3f46210c0e58b
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
<<<<<<< HEAD
            'name'   => 'required'
=======
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
>>>>>>> f1b98233366ecf4d2ac81e49abe3f46210c0e58b
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
<<<<<<< HEAD
                //'Codigo' =>    ['data' => 'code','relation' => null],
                'Marca'  =>  ['data' => 'name','relation' => null],
                //'Desc.' =>     ['data' => 'description','relation' => null],
=======
                'Marca' =>       ['data' => 'name','relation' => null],
>>>>>>> f1b98233366ecf4d2ac81e49abe3f46210c0e58b

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}