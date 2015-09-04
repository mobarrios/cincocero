<?php

namespace App\Http\Repositories\ahgai;

use App\Entities\ahgai\Noticias;
use App\Http\Repositories\BaseRepo;

class NoticiasRepo extends BaseRepo {

    public function getModel()
    {
        return new Noticias;
    }


    public function Rules()
    {
        return [
            'encabezado'   => 'required',
            'descripcion'   => 'required'
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'encabezado'   => 'required',
            'descripcion'   => 'required'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Fecha Publicación' =>    ['data' => 'fecha_publicacion','relation' => null],
                'Encabezado' =>  ['data' => 'encabezado','relation' => null],
                //'Descrip.' =>     ['data' => 'description','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}