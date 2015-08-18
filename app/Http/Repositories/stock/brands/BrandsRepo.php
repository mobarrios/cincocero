<?php

namespace App\Http\Repositories\stock\brands;

use App\Entities\stock\Brands;
use App\Http\Repositories\BaseRepo;

class BrandsRepo extends BaseRepo {

    public function getModel()
    {
        return new Brands;
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
                'Marca' =>  ['data' => 'name','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}