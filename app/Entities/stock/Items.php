<?php
namespace App\Entities\stock;

use \App\Entities\Entity;

class Items extends Entity{

    protected $table = 'items';

    protected $fillable = ['name','brands_id'];

    public function Brands()
    {
        return $this->belongsTo(Brands::getClass());
    }


}