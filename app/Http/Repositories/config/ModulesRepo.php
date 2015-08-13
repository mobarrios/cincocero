<?php

namespace App\Http\Repositories\config;

use App\Entities\Modules;
use App\Entities\Permissions;
use App\Entities\Profile;
use App\Http\Repositories\BaseRepo;

class ModulesRepo extends BaseRepo {

    public function getModel()
    {
        return new Modules;
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'Modulo' =>    ['data' => 'name','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }



    public function create($datos)
    {
        $model =  $this->model->create($datos->all());
        $profiles = Profile::all();

        foreach($profiles as $profile)
        {
            $permissions = new Permissions();
            $permissions->modules_id    = $model->id;
            $permissions->profiles_id   = $profile->id;
            $permissions->list          = 0;
            $permissions->edit          = 0;
            $permissions->delete        = 0;
            $permissions->store         = 0;

            $permissions->save();

        }
    }


}