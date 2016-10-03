<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Displacements extends Entity{

    protected $table = 'displacements';

    protected $fillable = ['name'];


    public function Models()
    {
        return $this->belongsTo(Models::getClass());
    }
}