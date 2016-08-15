<?php

namespace App\Http\Repositories\soffem;

use App\Entities\soffem\Teams;
use App\Http\Repositories\BaseRepo;

class TeamsRepo extends BaseRepo {

    public function getModel()
    {
        return new Teams;
    }

    public function createCustom($datos = null)
    {
        $data = $datos->all();

        return;
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
            'categories_id'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:6144',
        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            'categories_id'   => 'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:6144'
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Imagenes'  =>   ['data' => 'images','relation'=> null],
                'Equipo'    =>   ['data' => 'name','relation' => null],
                'Password'  =>   ['data' => 'password', 'relation' => null],
                'Estado'    =>   ['data'=>'status','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }

    public function getTeamsByFases($id_fases = null){

       $teams =  Teams::WhereHas('FasesTeams',function($q) use ($id_fases){
            $q->where('fases_id',$id_fases);
        })
            ->where('status',1)
            ->orderBy('name','ASC')
            ->get()
            ->lists('name','id');

        return $teams;

    }




}