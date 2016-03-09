<?php
namespace App\Entities\hogar;

use \App\Entities\Entity;

class Pacientes extends Entity{

    protected $table = 'pacientes';

    protected $fillable = ['apellido','nombre','dni','telefonos','legajo'];




}