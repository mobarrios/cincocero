<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class Categories extends Entity{

    protected $table = 'categories';

    protected $fillable = ['name','color_top','color_bottom'];

    public function Tournaments()
    {
        return $this->hasMany(Tournaments::getClass());
    }

    public function Teams()
    {
        return $this->hasMany(Teams::getClass());
    }
}