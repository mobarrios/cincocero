<?php

namespace App\Http\Repositories\motonet;


use App\Entities\motonet\Displacements;
use App\Http\Repositories\BaseRepo;

class DisplacementsRepo extends BaseRepo {

    public function getModel()
    {
        return new Displacements();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'name'   => 'required'

        ];
    }

    public function RulesEdit($id = null)
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
                'Tipo' =>    ['data' => 'name','relation'=> null]
            ],
        ];

        return $header;
    }




}