<?php

namespace App\Http\Repositories\hogar;

use App\Entities\hogar\EmpleadosFunciones;
use App\Http\Repositories\BaseRepo;

class EmpleadosFuncionesRepo extends BaseRepo {

    public function getModel()
    {
        return new EmpleadosFunciones();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'name'  => 'required',


        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'  => 'required',

        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen'    =>  ['data' => 'images','relation'=> null],
                'Función'    =>  ['data' => 'name','relation' => null],
                //'Apellido'  =>  ['data' => 'apellido','relation' => null],
               // 'Nombre'    =>  ['data' => 'nombre','relation' => null],


                //'Marca' =>     ['data' => 'Brands','relation' => 'name'],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}