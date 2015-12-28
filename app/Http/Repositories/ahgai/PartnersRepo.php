<?php

namespace App\Http\Repositories\ahgai;

use App\Entities\ahgai\Partners;
use App\Http\Repositories\BaseRepo;

class PartnersRepo extends BaseRepo {

    public function getModel()
    {
        return new Partners();
    }

    public function createCustom($data = null)
    {
        $data = $data->all();


        $data['establecimientos_id'];



        return ;
    }

    public function Rules()
    {
        return [
            'name'   => 'required',
            'last_name'   => 'required',
            //'mail'   => 'required|unique:users,email',
            'establecimientos_id' => 'required',
            'password'      => 'required|between:4,20|confirmed',
            'password_confirmation' =>'required',


        ];
    }

    public function RulesEdit($id = null)
    {
        return [

            'name'      => 'required',
            'last_name'  => 'required',
            'establecimientos_id' => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],

                'Apellido' =>  ['data' => 'last_name','relation' => null],
                'Nombre' =>  ['data' => 'name','relation' => null],
                'Mail' =>  ['data' => 'mail','relation' => null],

                'Comercio' => ['data' => 'Establecimientos' , 'relation' => 'name'],


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }






}