<?php
namespace App\Entities\hogar;

use \App\Entities\Entity;

class Empleados extends Entity{

    protected $table = 'empleados';

    protected $fillable = ['apellido','nombre','dni','telefonos','funciones_id','legajo'];

    public function EmpleadosFunciones()
    {
        return $this->belongsTo(EmpleadosFunciones::getClass(),'funciones_id');
    }


}