<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Tournaments extends Entity{

    protected $table = 'tournaments';

    protected $fillable = ['name','from','to','series_id','seasons_id','categories_id'];


    public function Seasons()
    {
        return $this->belongsTo(Tournaments::getClass());
    }

    public function Categories()
    {
        return $this->belongsTo(Categories::getClass());
    }

    public function Fases()
    {
        return $this->hasMany(Fases::getClass());
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