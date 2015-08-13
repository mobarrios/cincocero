<?php


namespace App\Http\Repositories;


use App\Entities\Crud;
use App\Http\Requests\CrudRequest;


class CrudRepo extends BaseRepo {

    public function getModel()
    {
         return new Crud();
    }

    public function Rules()
    {
        return [
            'data1'   => 'required|max:5',
            'data2'   => 'required|max:10'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
                        [
                            'PRIMER DATO' =>    ['data' => 'data1','relation' => null],
                            'SEGUNDO DATO'  =>  ['data' => 'data2','relation' => null],
                            //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
                        ],
                     ];

        return $header;
    }



}