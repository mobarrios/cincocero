<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class Sanciones extends Entity{

    protected $table = 'sanciones';

    protected $fillable = ['sancion','end_fases_week_id','players_id','fases_week_id','cantidad_fechas'];

    public function Players()
    {
        return $this->belongsTo(Players::getClass());

    }

    public function EndSancion()
    {
        return $this->belongsTo(FasesWeek::getClass(),'end_fases_week_id');

    }public function StartSancion()
    {
        return $this->belongsTo(FasesWeek::getClass(),'fases_week_id');

    }
}