<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Teams extends Entity{

    protected $table = 'teams';

    protected $fillable = ['name'];


    public function Matches()
    {
        return $this->hasMany(Matches::getClass());
    }
}