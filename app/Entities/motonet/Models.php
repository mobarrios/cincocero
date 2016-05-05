<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Models extends Entity{

    protected $table = 'models';

    protected $fillable = ['name','brands_id'];


    public function Brands()
    {
        return $this->belongsTo(Brands::getClass());
    }

    public function Publications()
    {
        return $this->hasMany(Publications::getClass());
    }

}