<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;
use \App\Entities\tfc\MatchesDetails;

class Players extends Entity{

    protected $table = 'players';

    protected $fillable = ['name','last_name','mail','phone','cel','teams_id','dni','status','motivo','admin'];


    public function Teams()
    {
        return $this->belongsTo(Teams::getClass());
    }

    public function getFullNameAttribute()
    {
        return $this->last_name .' '. $this->name;
    }

    public function FullName()
    {
        return $this->attributes['last_name'].' '.$this->attributes['name'];
    }

    public function Amarillas($id){
        $detalle = MatchesDetails::where('players_id',$id)->sum('yellow');
        return $detalle;
    }

    public function Rojas($id){
        $detalle = MatchesDetails::where('players_id',$id)->sum('red');
        return $detalle;
    }

    public function Goles($id){
        $detalle = MatchesDetails::where('players_id',$id)->sum('goals');
        return $detalle;
    }

    public function Sanciones()
    {
        return $this->hasMany(Sanciones::getClass());
    }

    public function FasesWeekSanciones($fasesWeekid = null)
    {

        $sancion = Sanciones::where('players_id',$this->attributes['id'])->where('end_fases_week_id','>=',$fasesWeekid)->get();

        if($sancion->count() != 0)
            return(true);
        else
            return(false);

    }


}