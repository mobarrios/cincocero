<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 4/8/15
 * Time: 15:01
 */

namespace App\Entities;



class Modules  extends Entity{

    protected $table  = 'modules';
    protected $fillable = ['name','available'];



}