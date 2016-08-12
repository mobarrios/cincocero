<?php

namespace App\Http\Repositories\soffem;

use App\Entities\soffem\Galleries;
use App\Entities\soffem\News;
use App\Http\Repositories\BaseRepo;

class GalleriesRepo extends BaseRepo {

    public function getModel()
    {
        return new Galleries();
    }

    public function createCustom($datos = null)
    {
        $data = $datos->all();

        return;
    }



    public function Rules()
    {
        return [
            'name'   => 'required',
            'imagen'  => 'image|mimes:jpeg,jpg,png,bmp|max:5120'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'imagen'  => 'image|mimes:jpeg,jpg,png,bmp|max:5120'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Name' =>  ['data' => 'name','relation' => null]
            ],
        ];

        return $header;
    }




}