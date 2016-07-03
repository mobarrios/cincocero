<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;
use App\Entities\User;

class Derivations extends Entity{

    protected $table = 'derivations';

    protected $fillable = ['users_id','clients_id','observaciones','status'];


    public function Users()
    {
        return $this->belongsTo(User::getClass());
    }

    public function Clients()
    {
        return $this->belongsTo(Clients::getClass());
    }

    public function getStatusAttribute()
    {
        if($this->attributes['status'] == 0)
            return 'Pendiente';

        if($this->attributes['status'] == 1)
            return 'Tomada';

        if($this->attributes['status'] == 2)
            return 'Finalizada';

    }


}