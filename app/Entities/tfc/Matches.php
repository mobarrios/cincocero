<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Matches extends Entity{

    protected $table = 'matches';

    protected $fillable = ['name','hour','date','home_teams_id','away_teams_id','status','fases_week_id','canchas_id','home_goals','away_goals','walk_over','walk_over_motivo','walk_over_no_ptos'];


    public function FasesWeek()
    {
        return $this->belongsTo(FasesWeek::getClass());
    }

    public function HomeTeam()
    {
        if(is_null( $this->belongsTo(Teams::getClass(),'home_teams_id') ))
            return 'Libre';

            return $this->belongsTo(Teams::getClass(),'home_teams_id');

    }

    public function AwayTeam()
    {
        if(is_null( $this->belongsTo(Teams::getClass(),'away_teams_id') ))
            return 'Libre';

        return $this->belongsTo(Teams::getClass(),'away_teams_id');
    }

    public function Canchas()
    {
        return $this->belongsTo(Canchas::getClass());
    }



    public function getDateAttribute($value)
    {

        if($value != null)
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
