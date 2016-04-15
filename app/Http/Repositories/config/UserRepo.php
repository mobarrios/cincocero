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
use Illuminate\Support\Facades\Auth;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }

    public function createCustom($datos = null)
    {
        $data = $datos->all();

        return;
    }


    public function ListAndPaginate($paginate = 50, $search = null)
    {
        $qry = $this->model->orderBy('name')
            ->paginate($paginate);

        return $qry;
    }

    public function ListAll()
    {

        $qry = $this->model->where('db',Auth::user()->db)->get();
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
           // 'email'         => 'required|unique:users,email',
            'password'      => 'required|between:4,20|confirmed',
            'password_confirmation' =>'required',
           // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024',


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

    public function RulesPassword()
    {
        return [
            //'name'          => 'required',
            //'last_name'     => 'required',
            'password'              =>'required|between:4,20|confirmed',
            'password_confirmation' =>'required',
        ];
    }

    public function RulesImages()
    {
        return [
            //'name'          => 'required',
            //'last_name'     => 'required',
            //'password'              =>'required|between:4,20|confirmed',
            //'password_confirmation' =>'required',
            'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:1024',
        ];
    }



}