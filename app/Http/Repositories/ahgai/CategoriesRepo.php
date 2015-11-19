<?php

namespace App\Http\Repositories\ahgai;

use App\Entities\ahgai\Categories;
use App\Http\Repositories\BaseRepo;

class CategoriesRepo extends BaseRepo {

    public function getModel()
    {
        return new Categories();
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
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],
                'Categorias de Establecimientos' =>  ['data' => 'name','relation' => null],
                //'Desc.' =>     ['data' => 'description','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }






}