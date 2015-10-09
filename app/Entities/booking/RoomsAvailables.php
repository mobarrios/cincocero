<?php
namespace App\Entities\booking;

use \App\Entities\Entity;

class RoomsAvailables extends Entity{

    protected $table = 'rooms_availables';

    protected $fillable = ['from','to','price','quantity','rooms_id','currency_id'];

    public function Rooms()
    {
        return $this->belongsTo(Rooms::getClass());
    }

    /**
     *
     */
    public function Currency()
    {
        return $this->belongsTo(Currency::getClass());
    }






    public function getFromAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }

    public function setFromAttribute($value)
    {
        $this->attributes['from'] = date('Y-m-d',strtotime($value));
    }

    public function getToAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }

    public function setToAttribute($value)
    {
        $this->attributes['to'] = date('Y-m-d',strtotime($value));
    }
}