<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Items extends Entity{

    protected $table = 'items';

    protected $fillable = ['n_motor','n_chasis','branches_id','models_id','code','providers_id','description','cost_price','sell_price','discount_price','rent_price_15_days','rent_price_45_days','expiration_date','stock','stock_rental','um','total_weight','maximun_weight','color','size','dimensions','presentation','bodega','provincia','observaciones','provider_code'];

    public function Models()
    {
        return $this->belongsTo(Models::getClass());
    }

    public function getMarcaAttribute()
    {
        return $this->Models->Brands->name;
    }

    public function getSellPriceAttribute($data){
        return  "$".$data;
    }

    public function Publications()
    {
        return $this->hasMany(Publications::getClass());
    }

    public function Branches()
    {
        return $this->belongsTo(Branches::getClass());
    }



}