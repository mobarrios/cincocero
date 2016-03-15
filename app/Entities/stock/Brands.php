<?php
namespace App\Entities\stock;

use \App\Entities\Entity;

class Brands extends Entity{

    protected $table = 'brands';

    protected $fillable = ['name'];

<<<<<<< HEAD
=======
    public function Items()
    {
        return $this->hasMany(Items::getClass());
    }

>>>>>>> f1b98233366ecf4d2ac81e49abe3f46210c0e58b

}