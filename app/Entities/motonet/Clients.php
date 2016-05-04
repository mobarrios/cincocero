<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Clients extends Entity{

    protected $table = 'clients';

    protected $fillable = ['name','last_name','dni','email'];


    public function Operations()
    {
        return $this->hasMany(Operations::getClass());
    }

    public function getFullNameAttribute()
    {
        return $this->attributes['last_name'] .' '.$this->attributes['name'];
    }

}