<?php
namespace App\Entities\content;

use \App\Entities\Entity;

class Clients extends Entity{

    protected $table = 'clients';

    protected $fillable = ['name'];


}