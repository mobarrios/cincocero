<?php
namespace App\Entities\stock;

use \App\Entities\Entity;

class Items extends Entity{

    protected $table    = 'items';
    protected $fillable = ['name','models_id','color','date_from','date_to'];

    public function Models()
    {
        return $this->belongsTo(Models::getClass());
    }

    public function getDateFromAttribute($value)
    {
        $value = date("d-m-Y",strtotime($value));
        return $value;
    }

    public function setDateFromAttribute($value)
    {
        $fecha = date("Y-m-d",strtotime($value));
        $this->attributes['date_from']	=	$fecha;

    }

    public function getDateToAttribute($value)
    {
        $value = date("d-m-Y",strtotime($value));
        return $value;
    }

    public function setDateToAttribute($value)
    {
        $fecha = date("Y-m-d",strtotime($value));
        $this->attributes['date_to']	=	$fecha;

    }


}