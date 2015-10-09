<?php

namespace App\Http\Repositories\booking;

use App\Entities\booking\RoomsAvailables;
use App\Http\Repositories\BaseRepo;

class RoomsAvailablesRepo extends BaseRepo {

    public function getModel()
    {
        return new RoomsAvailables;
    }


    public function Rules()
    {
        return [
            'chk_rooms'=>'required',
          'from' => 'required|date|date_format:d-m-Y|after:yesterday',
            'to' => 'required|date|date_format:d-m-Y|after:from',

           // 'name'   => 'required',
          //  'rooms_types_id' => 'required|not_in:0',
          //  'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'chk_rooms'=>'required',
            'from' => 'required|date|date_format:d-m-Y|after:yesterday',
              'to' => 'required|date|date_format:d-m-Y|after:from',

            // 'name'   => 'required',
           // 'rooms_types_id' => 'required|not_in:0',
           // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
               // 'Imagen' =>    ['data' => 'images','relation'=> null],
                'Desde'         =>  ['data' => 'from','relation' => null],
                'Hasta'         =>  ['data' => 'to','relation' => null],
                'Habitacion'    =>  ['data' => 'Rooms','relation' => 'name'],
                 ''              =>  ['data'=>'Currency','relation' => 'name'],
                '$'             =>  ['data' => 'price','relation' => null],


               // 'Tipo' =>['data' => 'RoomsTypes','relation' => 'name','id' ],

            ],
        ];

        return $header;
    }




}