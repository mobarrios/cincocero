<?php

namespace App\Http\Repositories\soffem;

use App\Entities\soffem\Players;
use App\Entities\soffem\Teams;
use App\Http\Repositories\BaseRepo;

class PlayersRepo extends BaseRepo {

    public function getModel()
    {
        return new Players;
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
            'last_name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:6144',
            'teams_id' => 'required',
            'dni' => 'required|unique:players,dni',
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'last_name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:6144',
            'teams_id' => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'DNI'=> ['data' => 'dni', 'relation'=>null],
                'Nombre' =>  ['data' => 'name','relation' => null],
                'Apellido' =>  ['data' => 'last_name','relation' => null],
                'Mail' =>  ['data' => 'mail','relation' => null],
                'Tel' =>  ['data' => 'phone','relation' => null],
                'Cel' =>  ['data' => 'cel','relation' => null],

                'Estado' => ['data'=>'status','relation' => null],

                'Equipo' =>['data' => 'Teams','relation' => 'name'],
            ],
        ];

        return $header;
    }




}