<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Brands extends Entity{

    protected $table = 'brands';

    protected $fillable = ['name'];

    public function Items()
    {
        return $this->hasMany(Items::getClass());
    }


}