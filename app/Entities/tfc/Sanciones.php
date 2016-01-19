<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Sanciones extends Entity{

    protected $table = 'sanciones';

    protected $fillable = ['sancion','end_fases_week_id','players_id','fases_week_id'];

    public function Players()
    {
        return $this->belongsTo(Players::getClass());

    }

    public function EndSancion()
    {
        return $this->belongsTo(FasesWeek::getClass(),'end_fases_week_id');

    }
}