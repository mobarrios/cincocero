<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Notices extends Entity{

    protected $table = 'notices';

    protected $fillable = ['title','copete','description'];

}