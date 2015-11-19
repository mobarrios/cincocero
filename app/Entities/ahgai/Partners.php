<?php
namespace App\Entities\ahgai;

use \App\Entities\Entity;

class Partners extends Entity{

    protected $table = 'partners';

    protected $fillable = ['name','last_name','phone','mail'];


}