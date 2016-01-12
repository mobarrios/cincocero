<?php
namespace App\Entities\tfc;

use \App\Entities\Entity;

class Players extends Entity{

    protected $table = 'players';

    protected $fillable = ['name','last_name','mail','phone','cel','teams_id'];


    public function Teams()
    {
        return $this->belongsTo(Teams::getClass());
    }

    public function FullName()
    {
        return $this->attributes['last_name'].' '.$this->attributes['name'];
    }




}