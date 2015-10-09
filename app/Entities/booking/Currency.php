<?php
namespace App\Entities\booking;

use \App\Entities\Entity;

class Currency extends Entity{

    protected $table = 'currency';

    protected $fillable = ['name'];

    public function RoomsAvailables()
    {
        return $this->belongsTo(RoomsAvailables::getClass());
    }

}