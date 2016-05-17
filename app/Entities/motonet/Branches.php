<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Branches extends Entity{

    protected $table = 'branches';

    protected $fillable = ['name','address'];


    public function Items()
    {
        return $this->hasMany(Items::getClass());
    }

}