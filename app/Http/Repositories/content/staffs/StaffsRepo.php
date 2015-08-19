<?php

namespace App\Http\Repositories\content\staffs;

use App\Entities\content\Staffs;
use App\Http\Repositories\BaseRepo;

class StaffsRepo extends BaseRepo {

    public function getModel()
    {
        return new Staffs;
    }


    public function Rules($id = null)
    {
        return [
            'name'   => 'required'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Apellido' =>  ['data' => 'last_name','relation' => null],

                'Nombre' =>  ['data' => 'name','relation' => null],


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}