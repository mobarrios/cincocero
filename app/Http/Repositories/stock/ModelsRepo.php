<?php

namespace App\Http\Repositories\stock;

use App\Entities\stock\Models;
use App\Http\Repositories\BaseRepo;
use Illuminate\Support\Facades\Session;

class ModelsRepo extends BaseRepo {

    public function getModel()
    {
        return new Models();
    }


    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Codigo' =>    ['data' => 'code','relation' => null],
                'Modelo' =>  ['data' => 'name','relation' => null],
                //'Marca' =>     ['data' => 'Brands','relation' => 'name'],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }


    public function export() {

        //$modelSearch = $this->getModel()->with('Brands')->orderBy('name','ASC')->get();
        $modelSearch = $this->getModel()->orderBy('name','ASC')->get();
        $data = [];

        foreach ($modelSearch as $item) {

            array_push($data, ['Codigo'=>$item->id, 'Modelo'=>$item->name]);

        }

        Session::put('export',$data);

    }




}