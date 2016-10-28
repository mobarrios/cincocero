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

    public function Models()
    {
        return $this->belongsToMany(Models::getClass(),'models_categories')->withPivot('categories_id','models_id');
    }


}