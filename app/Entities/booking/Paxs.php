<?php
namespace App\Entities\booking;

use \App\Entities\Entity;

class Paxs extends Entity{

    protected $table = 'paxs';

    protected $fillable = ['last_name','name','dni','dob','mail','address','phone','cel'];


}