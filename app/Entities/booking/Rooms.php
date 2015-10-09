<?php
namespace App\Entities\booking;

use \App\Entities\Entity;

class Rooms extends Entity{

    protected $table = 'rooms';

    protected $fillable = ['name','rooms_types_id'];

    public function RoomsTypes()
    {
        return $this->belongsTo(RoomsTypes::getClass());
    }

    public function RoomsAvailables()
    {
        return $this->hasMany(RoomsAvailables::getClass());
    }


}