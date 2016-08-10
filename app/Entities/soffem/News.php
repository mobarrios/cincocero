<?php
namespace App\Entities\soffem;

use \App\Entities\Entity;

class News extends Entity{

    protected $table = 'news';

    protected $fillable = ['date','title','description','detail'];



    public function getDateAttribute($value)
    {
        return date('d-m-Y',strtotime($value));
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = date('Y-m-d',strtotime($value));
    }



}