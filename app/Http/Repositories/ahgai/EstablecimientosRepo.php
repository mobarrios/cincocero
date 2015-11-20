<?php

namespace App\Http\Repositories\ahgai;

use App\Entities\ahgai\Establecimientos;
use App\Http\Repositories\BaseRepo;

class EstablecimientosRepo extends BaseRepo {

    public function getModel()
    {
        return new Establecimientos;
    }


    public function Rules()
    {
        return [
<<<<<<< HEAD:app/Http/Repositories/ahgai/EstablecimientosRepo.php
            'name'   => 'required|unique:establecimientos,name',
=======
           // 'code'   => 'required|unique:items,code',
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024',
            'nm' => 'required',
>>>>>>> 7ceaf2957db182baae062b8cc35e1833d7dab8f8:app/Http/Repositories/stock/items/ItemsRepo.php
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
<<<<<<< HEAD:app/Http/Repositories/ahgai/EstablecimientosRepo.php
=======
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024',
             'nm' => 'required',
>>>>>>> 7ceaf2957db182baae062b8cc35e1833d7dab8f8:app/Http/Repositories/stock/items/ItemsRepo.php
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],
<<<<<<< HEAD:app/Http/Repositories/ahgai/EstablecimientosRepo.php
                'Establecimiento' =>  ['data' => 'name','relation' => null],
                //'Desc.' =>     ['data' => 'description','relation' => null],
=======
                'Articulo' =>  ['data' => 'name','relation' => null],
               // 'Desc.' =>     ['data' => 'description','relation' => null],
>>>>>>> 7ceaf2957db182baae062b8cc35e1833d7dab8f8:app/Http/Repositories/stock/items/ItemsRepo.php

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }






}