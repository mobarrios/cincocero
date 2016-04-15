<?php

namespace App\Http\Repositories\tfc;

use App\Entities\tfc\Destacados;
use App\Http\Repositories\BaseRepo;

class DestacadosRepo extends BaseRepo {

    public function getModel()
    {
        return new Destacados();
    }

    public function createCustom($datos = null)
    {
        $data = $datos->all();

        return;
    }



    public function Rules()
    {
        return [
            'teams_id'   => 'required',
            'players_id'   => 'required',
            'fases_week_id' => 'required',
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'teams_id'   => 'required',
            'players_id'   => 'required',
            'fases_week_id' => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                'Jugador' =>  ['data' => 'players_id','relation' => null],
                'Equipo' => ['data'=>'teams_id','relation' => null]

            ],
        ];

        return $header;
    }




}