<?php
namespace App\Entities\stock;

use \App\Entities\Entity;

class Items extends Entity{

    protected $table = 'items';

    protected $fillable = ['name','models_id'];

    public function Models()
    {
        return $this->belongsTo(Models::getClass());
    }


}