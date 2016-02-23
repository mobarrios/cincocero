<?php

namespace App\Http\Repositories\ahgai;

use App\Entities\ahgai\Rooms;
use App\Http\Repositories\BaseRepo;

class RoomsRepo extends BaseRepo {

    public function getModel()
    {
        return new Rooms();
    }


    public function Rules()
    {
        return [
            'tipo'   => 'required',
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'tipo'   => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],
                'Tipos de Habitaciones de Establecimientos' =>  ['data' => 'tipo','relation' => null],
                //'Desc.' =>     ['data' => 'description','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }






}