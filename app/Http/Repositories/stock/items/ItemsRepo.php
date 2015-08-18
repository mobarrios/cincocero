<?php

namespace App\Http\Repositories\stock\items;

use App\Entities\stock\Items;
use App\Http\Repositories\BaseRepo;

class ItemsRepo extends BaseRepo {

    public function getModel()
    {
        return new Items;
    }


    public function Rules($id = null)
    {
        return [
            'code'   => 'required|unique:items,code',
            'name'   => 'required'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Codigo' =>    ['data' => 'code','relation' => null],
                'Articulo' =>  ['data' => 'name','relation' => null],
                'Desc.' =>     ['data' => 'description','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}