<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class FasesTeams extends Entity{

    protected $table = 'fases_teams';

    public function Teams(){
        return $this->belongsTo(Teams::getClass());
    }

}