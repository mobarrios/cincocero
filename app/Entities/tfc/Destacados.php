<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Destacados extends Entity{

    protected $table = 'destacados';

    protected $fillable = ['players_id','teams_id','fases_week_id','nota'];

    public function Players()
    {
        return $this->belongsTo(Players::getClass());
    }

    public function Teams()
    {
        return $this->belongsTo(Teams::getClass());
    }

    public function fasesWeeks()
    {
        return $this->belongsTo(FasesWeek::getClass(),'fases_week_id');
    }


}