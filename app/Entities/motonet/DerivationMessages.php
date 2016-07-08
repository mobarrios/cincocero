<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;
use App\Entities\User;
use Carbon\Carbon;

class DerivationMessages extends Entity{

    protected $table = 'derivation_messages';

    protected $fillable = ['derivations_id','message','users_id'];


    public function Users()
    {
        return $this->belongsTo(User::getClass());
    }

    public function Derivations()
    {
        return $this->belongsTo(Derivations::getClass());
    }

    public function dateForHuman(){

        return Carbon::createFromTimestamp(strtotime($this->created_at))->diffForHumans();

    }

}