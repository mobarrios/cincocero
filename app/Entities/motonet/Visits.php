<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Visits extends Entity{

    protected $table = 'visits';

    protected $fillable = ['description'];



}