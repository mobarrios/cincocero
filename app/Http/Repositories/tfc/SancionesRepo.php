<?php

namespace App\Http\Repositories\tfc;

use App\Entities\tfc\Sanciones;
use App\Http\Repositories\BaseRepo;

class SancionesRepo extends BaseRepo {

    public function getModel()
    {
        return new Sanciones;
    }

    public function createCustom($datos = null)
    {
        $data = $datos->all();

        return;
    }



    public function Rules()
    {
        return [
            'sancion'   => 'required',
            'players_id'   => 'required',
            'end_fases_week_id' => 'required',
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'sancion'   => 'required',
            'players_id'   => 'required',
            'end_fases_week_id' => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                'Jugador' =>  ['data' => 'Players','relation' => 'last_name'],


            ],
        ];

        return $header;
    }




}