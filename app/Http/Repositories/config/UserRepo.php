<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:42
 */

namespace App\Http\Repositories\config;

use App\Entities\User;
use App\Http\Repositories\BaseRepo;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }

    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->orderBy('name')
            ->paginate($paginate);

        return $qry;
    }

    public function ListAll()
    {
        $qry = $this->model->all();
        return $qry;
    }

    public function tableHeader()
    {

       $header  =  ['columns' => [  'Nombre' =>['data' => 'name', 'relation' => null],
                                    'Email'  =>['data' => 'email','relation' => null],
                                    'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
                                    ],
       ];
        return $header;
    }

    public function Rules()
    {

        return [
            'name'          => 'required',
            'last_name'     => 'required',
            'email'         =>'required|unique:users,email',
            'password'      =>'required|between:4,20|confirmed',
            'password_confirmation' =>'required',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'          => 'required',
            'last_name'     => 'required',
            //'password'      =>'required|between:4,20|confirmed',
            //'password_confirmation' =>'required',
        ];
    }



}