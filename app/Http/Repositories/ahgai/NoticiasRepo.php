<?php

namespace App\Http\Repositories\ahgai;

use App\Entities\ahgai\News;
use App\Http\Repositories\BaseRepo;

class NoticiasRepo extends BaseRepo {

    public function getModel()
    {
        return new News;
    }


    public function Rules()
    {
        return [
            'title'   => 'required',
            'copete'   => 'required',
            'description'   => 'required'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'title'   => 'required',
            'copete'   => 'required',
            'description'   => 'required'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Fecha Publicación' =>    ['data' => 'date','relation' => null],
                'Titulo' =>  ['data' => 'title','relation' => null],
                'Breve Descripción' =>     ['data' => 'copete','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}