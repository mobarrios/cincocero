<?php
namespace App\Entities\booking;

use \App\Entities\Entity;

class Services extends Entity{

    protected $table = 'services';

    protected $fillable = ['name'];


}