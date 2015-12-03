<?php
namespace App\Entities\stock;

use \App\Entities\Entity;

class Brands extends Entity{

    protected $table = 'brands';

    protected $fillable = ['name'];

    public function Items()
    {
        return $this->hasMany(Items::getClass());
    }


}