<?php

namespace App\Http\Repositories\soffem;

use App\Entities\soffem\News;
use App\Http\Repositories\BaseRepo;

class NewsRepo extends BaseRepo {

    public function getModel()
    {
        return new News;
    }

    public function createCustom($datos = null)
    {
        $data = $datos->all();

        return;
    }



    public function Rules()
    {
        return [
            'date'   => 'required',
            'title'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'date'   => 'required',
            'title'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Fecha' =>  ['data' => 'date','relation' => null],
                'Tìtulo' =>  ['data' => 'title','relation' => null],
                'Desc.' =>['data' => 'description','relation' => null],
                'Detalle' =>['data' => 'detaile','relation' => null],

            ],
        ];

        return $header;
    }




}