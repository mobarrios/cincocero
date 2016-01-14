<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class MatchesDetails extends Entity{

    protected $table = 'matches_details';

    protected $fillable = ['matches_id','players_id','yellow_1','yellow_2','red','goals'];

    public function Matches()
    {
        return $this->belongsTo(Matches::getClass());
    }


}
