<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 4/8/15
 * Time: 15:01
 */

namespace App\Entities;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class Menus  extends Entity {


    protected $table  = 'menus';
    protected $fillable = ['name','routes','main','available'];

    /*
    public function getMainAttribute($value)
    {
      //  return $value;
        $data = $this->where('id',$value)->first();


        if(!is_null($data))
            return $data->name;


    }
    */

    /**
     *
     */
}