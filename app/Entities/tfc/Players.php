<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Players extends Entity{

    protected $table = 'players';

    protected $fillable = ['name','last_name','mail','phone','cel'];


}