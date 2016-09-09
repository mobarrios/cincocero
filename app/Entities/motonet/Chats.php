<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Chats extends Entity{

    protected $table = 'chats';

    protected $fillable = ['token','users_id','status'];

    public function ChatsMessages(){

       return $this->hasMany(ChatsMessages::getClass());
    }

}