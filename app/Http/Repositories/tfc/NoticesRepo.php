<?php

namespace App\Http\Repositories\tfc;


use App\Entities\tfc\Notices;
use App\Http\Repositories\BaseRepo;

class NoticesRepo extends BaseRepo {

    public function getModel()
    {
        return new Notices();
    }

    public function createCustom($datos = null)
    {
        $data = $datos->all();

        return;
    }


    public function Rules()
    {
        return [
            'title'   => 'required',
            'copete'   => 'required'
            //'categories_id' => 'required',
            //'series_id' => 'required',


            //'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'title'   => 'required',
            'copete'   => 'required'
            //'categories_id' => 'required',
            //'series_id' => 'required',


            // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
               //'Temporada' =>    ['data' => 'images','relation'=> null],
                'Title' =>  ['data' => 'title','relation' => null],

                'Copete' =>  ['data' => 'copete','relation' => null],




                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}