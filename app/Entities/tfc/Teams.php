<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Teams extends Entity{

    protected $table = 'teams';

    protected $fillable = ['name','password'];


    public function Fases()
    {
        return $this->belongsToMany(Fases::getClass(),'fases_teams');
    }

    public function Matches()
    {
        return $this->hasMany(Matches::getClass());
    }


    public function Players()
    {
        return $this->hasMany(Players::getClass());
    }

    public function PlayersList()
    {
        $players  = Players::where('teams_id',$this->attributes['id'])->get();

        return $players;
    }

    public function PlayersListActive()
    {
        $players  = Players::where('teams_id',$this->attributes['id'])->where('status',1)->get();

        return $players;
    }

    public function Tablas()
    {
        return $this->hasMany(Tablas::getClass());
    }

}