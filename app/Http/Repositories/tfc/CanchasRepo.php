<?php

namespace App\Http\Repositories\tfc;

use App\Entities\tfc\Canchas;
use App\Http\Repositories\BaseRepo;

class CanchasRepo extends BaseRepo {

    public function getModel()
    {
        return new Canchas;
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
            'sedes_id'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'sedes_id'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Cancha' =>  ['data' => 'name','relation' => null],


                'Sede' =>['data' => 'Sedes','relation' => 'name'],
            ],
        ];

        return $header;
    }




}