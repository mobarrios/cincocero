<?php

namespace App\Http\Repositories\ahgai;

use App\Entities\ahgai\Disponibilidad;
use App\Http\Repositories\BaseRepo;

class DisponibilidadRepo extends BaseRepo {

    public function getModel()
    {
        return new Disponibilidad();
    }


    public function Rules()
    {
        return [
            'rooms_types_id'   => 'required',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'rooms_types_id'   => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],
                'Habitación' =>  ['data' => 'Rooms','relation' => 'tipo'],
                'Desde' =>  ['data' => 'from','relation' => null],
                'Hasta' =>  ['data' => 'to','relation' => null],
                //'Desc.' =>     ['data' => 'description','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }






}