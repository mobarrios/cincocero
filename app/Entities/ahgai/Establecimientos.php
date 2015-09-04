<?php
namespace App\Entities\ahgai;

use \App\Entities\Entity;

class Establecimientos extends Entity{

    protected $table = 'establecimientos';

    protected $fillable = ['name','address','web','phone','establecimientos_types_id'];


}