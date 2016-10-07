<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Types extends Entity{

    protected $table = 'types';

    protected $fillable = ['name'];


    public function Models()
    {
        return $this->belongsTo(Models::getClass());
    }
}