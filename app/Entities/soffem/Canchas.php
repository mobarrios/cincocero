<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class Canchas extends Entity{

    protected $table = 'canchas';

    protected $fillable = ['name','sedes_id'];


    public function Sedes()
    {
        return $this->belongsTo(Sedes::getClass());
    }

    public function Matches()
    {
        return $this->hasMany(Matches::getClass());
    }
}