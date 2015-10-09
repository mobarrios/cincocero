<?php

namespace App\Http\Repositories\booking;

use App\Entities\booking\Paxs;
use App\Http\Repositories\BaseRepo;

class PaxsRepo extends BaseRepo {

    public function getModel()
    {
        return new Paxs;
    }


    public function Rules()
    {
        return [
            'last_name'   => 'required',
            'name'   => 'required',
            'dni'   =>'required|unique:paxs,dni',
            'mail'   => 'required|email',
          //  'rooms_types_id' => 'required|not_in:0',
          //  'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'last_name'   => 'required',
            'name'   => 'required',
            //'dni'  =>'required|unique:users,email',
            'mail'   => 'required|email',
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
                'ID' =>    ['data' => 'dni','relation' => null],
                'Apellido' =>    ['data' => 'last_name','relation' => null],
                'Nombre' =>    ['data' => 'name','relation' => null],
                'Apellido' =>    ['data' => 'name','relation' => null],
                'E.Mail' =>    ['data' => 'mail','relation' => null],


                // 'Tipo' =>['data' => 'RoomsTypes','relation' => 'name','id' ],
            ],
        ];

        return $header;
    }




}