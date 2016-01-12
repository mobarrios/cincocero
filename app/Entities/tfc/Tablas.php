<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Tablas extends Entity{

    protected $table = 'tablas';

    protected $fillable = ['fases_id','teams_id','pts','pj','pg','pe','pp','gf','gc','dg'];


    public function Teams()
    {
        return $this->belongsTo(Teams::getClass());
    }
}