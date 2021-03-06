<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:36
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class Entity extends Model {


    public function __construct()
    {
        if(Auth::check())
        {
            DB::setDefaultConnection('mysql');

            Config::set('database.connections.mysql.database', Auth::user()->db);

        }
    }

    public static function getClass()
    {
        return get_class(new static);
    }


    public function getImagesAttribute()
    {
        $id      = $this->attributes['id'];
        $entity  = $this->getTable();

        $image   = Images::where('entity',$entity)->where('entity_id',$id)->get();

        if(!is_null($image)){
            return $image;
        }
    }
    


}