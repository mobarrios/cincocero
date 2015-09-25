<?php
namespace App\Entities\content;

use \App\Entities\Entity;

class Players extends Entity{

    protected $table = 'players';

    protected $fillable = ['dni','name','last_name','position','age'];


}