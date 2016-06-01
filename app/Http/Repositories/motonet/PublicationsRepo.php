<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\Publications;
use App\Http\Repositories\BaseRepo;

class PublicationsRepo extends BaseRepo {

    public function getModel()
    {
        return new Publications();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'title'     => 'required',
            'image'    => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            'models_id'=>'required'

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'title'    => 'required',
            'image'    => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            'models_id'=>'required'

        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Titulo' =>    ['data' => 'title','relation' => null],
                '$' =>  ['data' => 'price','relation' => null],
                'Articulo' =>     ['data' => 'models_id','relation' => null],
               // 'a la Venta' => ['data'=>'salable','relation'=>null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}