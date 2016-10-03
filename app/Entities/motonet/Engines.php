<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Engines extends Entity{

    protected $table = 'engines';

    protected $fillable = ['name'];


    public function Models()
    {
        return $this->belongsTo(Models::getClass());
    }
}