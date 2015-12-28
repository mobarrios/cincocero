<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:42
 */

namespace App\Http\Repositories\config;

use App\Entities\Modules;
use App\Entities\Permissions;
use App\Entities\Profile;
use App\Http\Repositories\BaseRepo;

class ProfileRepo extends BaseRepo {

    public function getModel()
    {
        return new Profile;
    }

    public function Lists()
    {
        $qry = $this->model->lists('profile','id');
        return $qry;
    }

    public function Rules()
    {
        return [
            'profile'   => 'required',
        ];
    }
    public function RulesEdit($id = null)
    {
        return [
            'profile'   => 'required',
        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'PERFIL' =>    ['data' => 'profile','relation' => null],
                'RUTA' =>    ['data' => 'home','relation' => null],
                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }

    public function create($datos)
    {
        $model =  $this->model->fill($datos->all());
        $model->save();

        $modules = Modules::all();



        foreach($modules as $module)
        {
            $permissions = new Permissions();
            $permissions->modules_id    = $module->id;
            $permissions->profiles_id   = $model->id;
            $permissions->list          = 0;
            $permissions->edit          = 0;
            $permissions->delete        = 0;
            $permissions->store         = 0;

            $permissions->save();

        }
    }


}