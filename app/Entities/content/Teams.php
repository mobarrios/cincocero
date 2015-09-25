<?php
namespace App\Entities\content;

use \App\Entities\Entity;

class Teams extends Entity{

    protected $table = 'teams';

    protected $fillable = ['name'];


}