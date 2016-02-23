<?php
namespace App\Entities\ahgai;

use \App\Entities\Entity;

class Rooms extends Entity{

    protected $table = 'rooms';

    protected $fillable = ['tipo','establecimientos_id'];


    public function Disponibilidad()
    {
        return $this->hasMany(Disponibilidad::getClass());
    }
}