<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Categories extends Entity{

    protected $table = 'categories';

    protected $fillable = ['name','color_top','color_bottom'];

    public function Tournaments()
    {
        return $this->hasMany(Tournaments::getClass());
    }
}