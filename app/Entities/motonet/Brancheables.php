<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Brancheables extends Entity{

    protected $table = 'brancheables';


    public function entities(){

        return $this->morphTo();
    }

}