<?php

namespace App\Http\Repositories\content;

use App\Entities\content\Teams;
use App\Http\Repositories\BaseRepo;

class TeamsRepo extends BaseRepo {

    public function getModel()
    {
        return new Teams;
    }


    public function Rules($id = null)
    {
        return [
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Escudo'  => ['data'=>'images','relation' =>null],
                'Nombre' =>  ['data' => 'name','relation' => null],


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}