<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Series extends Entity{

    protected $table = 'series';

    protected $fillable = ['name'];

    public function Tournaments()
    {
        return $this->hasMany(Tournaments::getClass());
    }

}