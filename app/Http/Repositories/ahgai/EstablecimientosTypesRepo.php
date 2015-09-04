<?php

namespace App\Http\Repositories\ahgai;

use App\Entities\ahgai\EstablecimientosTypes;
use App\Http\Repositories\BaseRepo;

class EstablecimientosTypesRepo extends BaseRepo {

    public function getModel()
    {
        return new EstablecimientosTypes;
    }


    public function Rules()
    {
        return [
            'type'   => 'required|unique:establecimientos_types,type',
            //'name'   => 'required'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'type'   => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],
                'Tipo' =>  ['data' => 'type','relation' => null],
                'Alojamiento' =>     ['data' => 'is_hotel','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}