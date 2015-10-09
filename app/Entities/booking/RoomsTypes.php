<?php
namespace App\Entities\booking;

use \App\Entities\Entity;

class RoomsTypes extends Entity{

    protected $table = 'rooms_types';

    protected $fillable = ['name'];

    public function Rooms()
    {
        return $this->hasMany(Rooms::getClass());
    }

}