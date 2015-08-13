<?php

namespace App\Http\Repositories\config;

use App\Entities\Modules;
use App\Http\Repositories\BaseRepo;

class ModulesRepo extends BaseRepo {

    public function getModel()
    {
        return new Modules;
    }


    public function Rules()
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
                'Modulo' =>    ['data' => 'name','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }


}