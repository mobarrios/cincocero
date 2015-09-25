<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:36
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model {

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