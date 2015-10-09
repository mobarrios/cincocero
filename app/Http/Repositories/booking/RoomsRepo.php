<?php

namespace App\Http\Repositories\booking;

use App\Entities\booking\Rooms;
use App\Http\Repositories\BaseRepo;

class RoomsRepo extends BaseRepo {

    public function getModel()
    {
        return new Rooms;
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
            'rooms_types_id' => 'required|not_in:0',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'rooms_types_id' => 'required|not_in:0',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Habitacion' =>    ['data' => 'name','relation' => null],
                'Tipo' =>['data' => 'RoomsTypes','relation' => 'name','id' ],
            ],
        ];

        return $header;
    }




}