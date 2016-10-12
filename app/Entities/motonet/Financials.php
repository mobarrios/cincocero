<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Financials extends Entity{

    protected $table = 'financials';

    protected $fillable = ['name','extra_cost'];


    
}