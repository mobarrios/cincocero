<?php


namespace App\Entities;



class Permissions  extends Entity{

    protected $table  = 'permissions';
    protected $fillable = ['list','edit','delete','store','profiles_id','modules_id'];

    public function Profiles()
    {
        return $this->belongsTo(Profile::getClass());
    }

    public function Modules()
    {
        return $this->belongsto(Modules::getClass());
    }

}