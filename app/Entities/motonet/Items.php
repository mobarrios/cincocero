<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Items extends Entity{

    protected $table = 'items';

    protected $fillable = ['name','brands_id','code','providers_id'];

    public function Models()
    {
        return $this->belongsTo(Models::getClass());
    }


}