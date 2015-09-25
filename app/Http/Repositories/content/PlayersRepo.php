<?php

namespace App\Http\Repositories\content;

use App\Entities\content\Players;
use App\Http\Repositories\BaseRepo;

class PlayersRepo extends BaseRepo {

    public function getModel()
    {
        return new Players;
    }


    public function Rules($id = null)
    {
        return [
            'dni'   => 'required',
            'name'   => 'required',
            'last_name' =>'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'last_name' =>'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Foto'  => ['data'=>'images','relation' =>null],
                'Apellido' =>  ['data' => 'last_name','relation' => null],
                'Nombre' =>  ['data' => 'name','relation' => null],



                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}