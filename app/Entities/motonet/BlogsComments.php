<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class BlogsComments extends Entity{

    protected $table = 'blogs_comments';

    protected $fillable = ['blogs_id','description','visible'];



   

}