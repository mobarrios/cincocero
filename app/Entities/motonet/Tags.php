<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;
use App\Entities\User;
use Carbon\Carbon;

class Tags extends Entity{

    protected $table = 'tags';

    protected $fillable = ['description','users_id','status'];

    public function getCreatedAtAttribute(){

        Carbon::setLocale('es');
        return Carbon::createFromTimestamp(strtotime($this->attributes['created_at']))->diffForHumans();
    }

    public function getUpdatedAtAttribute(){

        Carbon::setLocale('es');
        return Carbon::createFromTimestamp(strtotime($this->attributes['updated_at']))->diffForHumans();
    }

    public function Users(){

        return $this->belongsTo(User::getClass());
    }

}