<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Fases extends Entity{

    protected $table = 'fases';

    protected $fillable = ['name','tournaments_id'];

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

//    fases->weeks->matches->matchesdetail

}