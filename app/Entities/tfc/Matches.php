<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Matches extends Entity{

    protected $table = 'matches';

    protected $fillable = ['name','hour','date','home_team','away_team','status','fases_week_id','canchas_id','home_goals','away_goals','walk_over','walk_over_motivo'];


    public function FasesWeek()
    {
        return $this->belongsTo(FasesWeek::getClass());
    }

    public function HomeTeam()
    {
        return $this->belongsTo(Teams::getClass(),'home_teams_id');
    }

    public function AwayTeam()
    {
        return $this->belongsTo(Teams::getClass(),'away_teams_id');
    }

    public function Canchas()
    {
        return $this->belongsTo(Canchas::getClass());
    }



    public function getHourAttribute($value)
    {
        return $value.' hs';
    }

    public function getDateAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = date('Y-m-d',strtotime($value));
    }

    public function status()
    {
        return [0 => 'Por Jugar', 1 => 'Finalizado', 2 => 'Suspendido'];
    }

    public function MatchesDetails()
    {
        return $this->hasMany(MatchesDetails::getClass());
    }

    public function detailByPlayer($players_id = null)
    {
       return $this->MatchesDetails()->where('players_id',$players_id);
    }





}
