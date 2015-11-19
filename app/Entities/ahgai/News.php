<?php
namespace App\Entities\ahgai;

use \App\Entities\Entity;

class News extends Entity{

    protected $table = 'news';

    protected $fillable = ['date','title','copete','description'];


    public function getDateAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] =  date('Y-m-d',strtotime($value));
    }

}