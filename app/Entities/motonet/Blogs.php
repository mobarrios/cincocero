<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Blogs extends Entity{

    protected $table = 'blogs';

    protected $fillable = ['date','title','description'];


    public function Comments(){
        return $this->hasMany(BlogsComments::getClass());
    }

    public function getCommentsCountAttribute(){
        $comm =  $this->Comments()->count();

        return $comm;
    }


    public function getDateAttribute($value)
    {

        if($value != null)
            return date('d-m-Y',strtotime($value));

    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = date('Y-m-d',strtotime($value));
    }
   

}