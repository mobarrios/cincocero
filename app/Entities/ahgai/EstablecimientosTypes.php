<?php
namespace App\Entities\ahgai;

use \App\Entities\Entity;

class EstablecimientosTypes extends Entity{

    protected $table = 'establecimientos_types';

    protected $fillable = ['type','is_hotel'];


}