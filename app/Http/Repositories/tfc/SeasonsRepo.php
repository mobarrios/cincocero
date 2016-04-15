<?php

namespace App\Http\Repositories\tfc;

use App\Entities\tfc\Seasons;
use App\Http\Repositories\BaseRepo;

class SeasonsRepo extends BaseRepo {

    public function getModel()
    {
        return new Seasons;
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
            //'from'   => 'required|date',
            //'to'   => 'required|date|after:from',


            //'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
           // 'from'   => 'required|date',
           // 'to'   => 'required|date|after:from',
           // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
               //'Temporada' =>    ['data' => 'images','relation'=> null],
                'Temporada' =>  ['data' => 'name','relation' => null],

                'Inicio' =>  ['data' => 'from','relation' => null],
                'Fin' =>  ['data' => 'to','relation' => null],


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}