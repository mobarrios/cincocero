<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 4/8/15
 * Time: 15:01
 */

namespace App\Entities;



class Menus  extends Entity {

    protected $table  = 'menus';
    protected $fillable = ['name','routes','available'];
}