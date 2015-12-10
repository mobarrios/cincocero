<?php
namespace App\Entities\ahgai;

use \App\Entities\Entity;

class Categories extends Entity{

    protected $table = 'categories';

    protected $fillable = ['name'];

    public function Establecimientos()
    {
        return $this->hasMany(Establecimientos::getClass());
    }

}