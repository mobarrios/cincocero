<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class Seasons extends Entity{

    protected $table = 'seasons';

    protected $fillable = ['name','from','to'];


    public function Tournaments()
    {
        return $this->hasMany(Tournaments::getClass());
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