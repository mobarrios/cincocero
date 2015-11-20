<?php

namespace App\Http\Repositories\tfc;


use App\Entities\tfc\Tournaments;
use App\Http\Repositories\BaseRepo;

class TournamentsRepo extends BaseRepo {

    public function getModel()
    {
        return new Tournaments();
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
            'from'   => 'required|date',
            'to'   => 'required|date|after:from',
            //'categories_id' => 'required',
            'series_id' => 'required',


            //'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'from'   => 'required|date',
            'to'   => 'required|date|after:from',
            //'categories_id' => 'required',
            'series_id' => 'required',


            // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
               //'Temporada' =>    ['data' => 'images','relation'=> null],
                'Torneos' =>  ['data' => 'name','relation' => null],

                'Inicio' =>  ['data' => 'from','relation' => null],
                'Fin' =>  ['data' => 'to','relation' => null],




                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}