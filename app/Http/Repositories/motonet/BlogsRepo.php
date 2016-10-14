<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\Blogs;
use App\Http\Repositories\BaseRepo;

class BlogsRepo extends BaseRepo {

    public function getModel()
    {
        return new Blogs();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'title'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            //'brands_id' => 'required',
            //'categories_id' => 'required',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'title'   => 'required',
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
                'Fecha'  =>    ['data' => 'date','relation' => null],
                'Titulo' =>    ['data' => 'title','relation' => null],
                'Comentarios' =>     ['data' => 'CommentsCountSystem','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}