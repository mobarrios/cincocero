<?php

namespace App\Http\Repositories\config;

use App\Entities\Menus;
use App\Entities\Permissions;
use App\Entities\Profile;
use App\Http\Repositories\BaseRepo;
use Illuminate\Support\Facades\Auth;

class MenusRepo extends BaseRepo {

    public function getModel()
    {
        return new Menus;
    }


    public function Rules()
    {
        return [
            'name'   => 'required',
        ];
    }

    public function RulesEdit($id = null)
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
                'Menu' =>    ['data' => 'name','relation' => null],
                'Main' =>    ['data' => 'main', 'relation' => null],
                'Ruta' =>    ['data' => 'routes','relation' => null],


                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }


    public static function build()
    {

        $a               = Menus::where('main',0)->orderBy('name','ASC');
        $menu = [];

        foreach ($a->get() as $main)
        {
            $sub_menu   = [];

            $b          = Menus::where('main',$main->id)->orderBy('name','ASC');

            if($main->routes == '') {

                foreach ($b->get() as $sub) {

                    if (Auth::user()->Perfil->PermissionsByModule($sub->routes) == 1)
                      //  array_push($sub_menu , [$sub->name , $sub->routes]);
                     $sub_menu[$sub->name] = $sub->routes;
                }

                if (count($sub_menu) != 0)
                //    array_push($menu , [$main->name => [$sub_menu]]);
                $menu[$main->name] = $sub_menu;

            }else{

                $menu[$main->name] = $main->routes;
                //array_push($menu,[$main->name => $main->routes]);
            }
        }


       return $menu;
    }
}