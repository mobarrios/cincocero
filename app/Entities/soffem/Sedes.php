<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class Sedes extends Entity{

    protected $table = 'sedes';

    protected $fillable = ['name','address','phone'];

    public function Canchas()
    {
        return $this->hasMany(Canchas::getClass());
    }
}