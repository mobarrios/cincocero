<?php

return array(


    'sedes' =>
        [
            'name'     => ['string','50'],
            'address'    => ['string','100'],
            'phone'     => ['string','100'],
        ],

    'canchas' =>
        [
            'name'    => ['string','100'],
            'relations' => ['sedes_id'=>['sedes','id']],
        ],

    'teams' =>
        [
            'name'    => ['string','50'],
            'password' => ['string','50'],
        ],

    'players' =>
        [
            'name'    => ['string','50'],
            'last_name'    => ['string','50'],
            'mail'    => ['string','50'],
            'phone'    => ['string','50'],
            'cel'    => ['string','50'],
        ],

    'categories' =>
        [
            'name'    => ['string','50'],
        ],

    'seasons' =>
        [
            'name'    => ['string','50'],
            'from'      => ['date',''],
            'to'        => ['date',''],
        ],


    'tournaments' =>
        [
            'name'    => ['string','50'],
            'from'      => ['date',''],
            'to'        => ['date',''],

            'relations' => [
                           'seasons_id'=>['seasons','id'],
                           'categories_id'=>['categories','id']
            ],

        ],

    'fases' =>
        [
            'name'      => ['string','50'],
            'relations' => ['tournaments_id'=>['tournaments','id']],
        ],


    'fases_teams' =>
        [
            'relations' => ['fases_id' => ['fases','id'], 'teams_id'=>['teams','id']],
        ],


    'fases_week'=>
        [
            'name' => ['string',50],
            'relations' => ['fases_id'=>['fases','id']],
        ],

    'matches' =>
        [
            'name'          => ['string',50],
            'hour'          => ['string',50],
            'date'          => ['date',null],
            'status'        => ['string',50],
            'canchas_id'    => ['integer',null],

            'relations' => [
                            'fases_week_id'=>['fases_week','id'],
                            'home_teams_id'=>['teams','id'],
                            'away_teams_id'=> ['teams','id'],
                            ],


        ],
            //relations['nombre_columna'=>'tabla_realcion','referencia']
            //'relations' => ['profiles_id'=>['profiles','id'],
            //                'modules_id'=>['modules','id']],


);

?>