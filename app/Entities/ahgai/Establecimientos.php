<?php
namespace App\Entities\ahgai;

use \App\Entities\Entity;

class Establecimientos extends Entity{

    protected $table = 'establecimientos';

    protected $fillable = ['name','address','web','phone','mail','types_id','categories_id'];


    public function Categories()
    {
        return $this->belongsTo(Categories::getClass());
    }
}