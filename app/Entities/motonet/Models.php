<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Models extends Entity{

    protected $table = 'models';

    protected $fillable = ['name','brands_id','types_id','engines_id','displacements_id','transmission','hp','start','brake','tanque_de_combustible','peso','adicional'];


    public function Brands()
    {
        return $this->belongsTo(Brands::getClass());
    }

    public function Publications()
    {
        return $this->hasMany(Publications::getClass());
    }

    public function Categories()
    {
        return $this->belongsToMany(Categories::getClass(),'models_categories');
    }

    public function Providers()
    {
        return $this->belongsToMany(Providers::getClass(),'models_providers');
    }

    public function Displacements(){
        return $this->belongsTo(Displacements::getClass());
    }

    public function Types(){
        return $this->belongsTo(Types::getClass());
    }

    public function Engines(){
        return $this->belongsTo(Engines::getClass());
    }


    public function getNameCleanAttribute()
    {
        return $this->cleanChars($this->attributes['name']);
    }

    public function PurchasePrice(){

        return $this->hasOne(ModelsPurchasePrice::getClass());
    }

    public function SalePrice(){

        return $this->hasOne(ModelsSalePrice::getClass());

    }

    public function setTransmissionAttribute($value){
        if($value === 1){
            $this->attributes['transmission'] = "manual";
        }else if($value === 2){
            $this->attributes['transmission'] = "automática";
        }
    }

    public function setBrakeAttribute($value){
        if($value === 1){
            $this->attributes['brake'] = "disco";
        }else if($value === 2){
            $this->attributes['brake'] = "tambor";
        }
    }

    public function setStartAttribute($value){
        if($value === 1){
            $this->attributes['start'] = "patada";
        }else if($value === 2){
            $this->attributes['start'] = "eléctrica";
        }
    }

}