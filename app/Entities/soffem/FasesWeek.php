<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class FasesWeek extends Entity{

    protected $table = 'fases_week';

    protected $fillable = ['name','fases_id','active'];

    public function Fases()
    {
        return $this->belongsTo(Fases::getClass());
    }

    public function Matches()
    {
        return $this->hasMany(Matches::getClass());
    }

    public function Sancion()
    {
        return $this->hasMany(Sanciones::getClass());
    }





}