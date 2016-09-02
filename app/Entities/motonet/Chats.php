<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Chats extends Entity{

    protected $table = 'chats';

    protected $fillable = ['name'];


}