<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Items extends Entity{

    protected $table = 'items';

    protected $fillable = ['name','brands_id','code','providers_id','description','cost_price','sell_price','discount_price','rent_price_15_days','rent_price_45_days','expiration_date','stock','stock_rental','um','total_weight','maximun_weight','color','size','dimensions','presentation','bodega','provincia','observaciones','provider_code'];

    public function Models()
    {
        return $this->belongsTo(Models::getClass());
    }


    public function Categories()
    {
        return $this->belongsToMany(Categories::getClass(),'items_categories');
    }

    public function Brands()
    {
        return $this->belongsTo(Brands::getClass()  );
    }

    public function getSellPriceAttribute($data){
        return  "$".$data;
    }


}