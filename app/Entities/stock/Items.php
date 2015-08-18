<?php
namespace App\Entities\stock;

use \App\Entities\Entity;
class Items extends Entity{

    protected $table = 'items';

    protected $fillable = ['code','name','description'];


}