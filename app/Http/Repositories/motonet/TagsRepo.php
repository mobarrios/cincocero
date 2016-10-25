<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\Tags;
use App\Http\Repositories\BaseRepo;

class TagsRepo extends BaseRepo {

    public function getModel()
    {
        return new Tags();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'description'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            //'brands_id' => 'required',
            //'categories_id' => 'required',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'description'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            //'brands_id' => 'required',
            //'categories_id' => 'required',

        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                'Fecha'  =>    ['data' => 'created_at','relation' => null],
                'Descripción' =>    ['data' => 'description','relation' => null],
                'Usuario'   => ['data'=>'Users','relation' => 'fullname'],
                'Estado' =>     ['data' => 'status','relation' => null],
                'Actualizado' => ['data'=>'updated_at','relation'=>null]


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }

    public function getStatus(){

        return ['solicitado'=>'Solicitado','en_proceso'=>'en Proceso','finalizado'=>'Finalizado'];
        
    }

    public function listByStatus($status)
    {
        return $this->model->where('status','like',$status)->get();
    }


}