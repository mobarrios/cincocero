<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:42
 */

namespace App\Http\Repositories\config;

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


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                'PERFIL' =>    ['data' => 'profile','relation' => null],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }


}