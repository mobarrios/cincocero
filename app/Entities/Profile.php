<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 4/8/15
 * Time: 15:01
 */

namespace App\Entities;



class Profile  extends Entity{

    protected $table  = 'profiles';
    protected $fillable = ['profile','home'];


    public function User()
    {
        return $this->hasMany(User::getClass());
    }

    public function Permissions()
    {
        return $this->hasMany(Permissions::getClass(),'profiles_id');
    }

    // chequea si los permisos del perfil puede listar el modulo seleccionado para el armado del menu

    public function PermissionsByModule($module_name = null)
    {
        $module_id = Modules::where('name',$module_name)->first()->id;

        return $this->Permissions->where('modules_id',$module_id)->first()->list;
    }
}