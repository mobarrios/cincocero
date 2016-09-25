<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class ChatsMessages extends Entity{

    protected $table = 'chats_messages';

    protected $fillable = ['users_msg','clients_msg','chat_id'];

    public function Chats(){

        return $this->belongsTo(Chats::getClass());
    }

}