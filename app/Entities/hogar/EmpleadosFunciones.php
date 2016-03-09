<?php
namespace App\Entities\hogar;

use \App\Entities\Entity;

class EmpleadosFunciones extends Entity{

    protected $table = 'empleados_funciones';

    protected $fillable = ['name'];

    public function Empleados()
    {
        return $this->hasMany(Empleados::getClass());
    }



}