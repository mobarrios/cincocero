<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;
use Carbon\Carbon;

class BlogsComments extends Entity{

    protected $table = 'blogs_comments';

    protected $fillable = ['blogs_id','description','visible','name','email'];


    public function getCarbonDateAttribute(){
        Carbon::setLocale('es');
        return Carbon::createFromTimestamp(strtotime($this->created_at))->diffForHumans();
    }




}