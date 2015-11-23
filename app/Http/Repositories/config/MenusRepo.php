<?php

namespace App\Http\Repositories\config;

use App\Entities\Menus;
use App\Entities\Permissions;
use App\Entities\Profile;
use App\Http\Repositories\BaseRepo;

class MenusRepo extends BaseRepo {

    public function getModel()
    {
        return new Menus;
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
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
        ];
    }

    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Menu' =>    ['data' => 'name','relation' => null],
                'Main' =>    ['data' => 'main', 'relation' => null],
                'Ruta' =>    ['data' => 'routes','relation' => null],


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}