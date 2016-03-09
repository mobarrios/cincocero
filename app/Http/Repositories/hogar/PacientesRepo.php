<?php

namespace App\Http\Repositories\hogar;

use App\Entities\hogar\Pacientes;
use App\Http\Repositories\BaseRepo;

class PacientesRepo extends BaseRepo {

    public function getModel()
    {
        return new Pacientes();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'apellido'  => 'required',
            'nombre'    => 'required',
            'dni'       => 'required',
            'legajo'    => 'required',
            'image'     => 'image|mimes:jpeg,jpg,png,bmp|max:1024',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'apellido'  => 'required',
            'nombre'    => 'required',
            'legajo'    => 'required',

            'image'     => 'image|mimes:jpeg,jpg,png,bmp|max:1024',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen'    =>  ['data' => 'images','relation'=> null],
                'Legajo'    =>  ['data' => 'legajo','relation' => null],
                'Apellido'  =>  ['data' => 'apellido','relation' => null],
                'Nombre'    =>  ['data' => 'nombre','relation' => null],


              //  'Función' =>     ['data' => 'EmpleadosFunciones','relation' => 'name'],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}