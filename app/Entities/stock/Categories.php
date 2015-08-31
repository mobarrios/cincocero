<?php
namespace App\Entities\stock;

use \App\Entities\Entity;

class Categories extends Entity{

    protected $table = 'categories';

    protected $fillable = ['name'];


}