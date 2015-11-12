<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Canchas extends Entity{

    protected $table = 'canchas';

    protected $fillable = ['name','sedes_id'];


    public function Sedes()
    {
        return $this->belongsTo(Sedes::getClass());
    }

}