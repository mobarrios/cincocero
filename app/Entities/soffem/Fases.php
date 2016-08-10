<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class Fases extends Entity{

    protected $table = 'fases';

    protected $fillable = ['name','tournaments_id','secound_round','play_off','start','i_v','tercer_puesto'];

    public function Tournaments()
    {
        return $this->belongsTo(Tournaments::getClass());
    }

    public function Teams()
    {
        return $this->belongsToMany(Teams::getClass(),'fases_teams');
    }

    public function Weeks()
    {
        return $this->hasMany(FasesWeek::getClass());
    }




}