<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\Chats;
use App\Http\Repositories\BaseRepo;

class ChatsRepo extends BaseRepo {

    public function getModel()
    {
        return new Chats;
    }


    public function Rules()
    {
        return [
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
//        $header  =  ['columns' =>
//            [
//                'Imagen' =>    ['data' => 'images','relation'=> null],
//                'Marca' =>       ['data' => 'name','relation' => null],
//
//                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
//            ],
//        ];
//
//        return $header;
    }




}