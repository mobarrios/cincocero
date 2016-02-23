<?php
namespace App\Entities\ahgai;

use \App\Entities\Entity;

class Disponibilidad extends Entity
{

    protected $table = 'disponibilidad';

    protected $fillable = ['esteblecimientos_id', 'rooms_types_id', 'from', 'to'];

    public function Establecimientos()
    {
        return $this->belongsTo(Establecimientos::getClass());
    }

    public function Rooms()
    {
        return $this->belongsTo(Rooms::getClass(),'rooms_types_id');
    }

    public function getFromAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }

    public function setFromAttribute($value)
    {
        $this->attributes['from'] =  date('Y-m-d',strtotime($value));
    }

    public function getToAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }

    public function setToAttribute($value)
    {
        $this->attributes['to'] =  date('Y-m-d',strtotime($value));
    }


}