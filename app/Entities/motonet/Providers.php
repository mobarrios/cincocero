<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Providers extends Entity{

    protected $table = 'providers';

    protected $fillable = ['name','razon_social','cuit','phone','mail','contact_name','address','iva_condition_id'];

    public function Models(){
        return $this->belongsToMany(Models::getClass(),'models_providers');
    }
   

}