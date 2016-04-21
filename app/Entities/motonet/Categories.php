<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Categories extends Entity{

    protected $table = 'categories';

    protected $fillable = ['name'];

    public function Items()
    {
        return $this->belongsToMany(Items::getClass(),'items_categories');
    }


}