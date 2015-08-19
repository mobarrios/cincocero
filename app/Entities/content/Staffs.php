<?php
namespace App\Entities\content;

use \App\Entities\Entity;

class Staffs extends Entity{

    protected $table = 'staffs';

    protected $fillable = ['name','last_name'];


}