<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class FasesWeek extends Entity{

    protected $table = 'fases_week';

    protected $fillable = ['name','fases_id'];

    public function Fases()
    {
        return $this->belongsTo(Fases::getClass());
    }

    public function Matches()
    {
        return $this->hasMany(Matches::getClass());
    }

}