<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Models extends Entity{

    protected $table = 'models';

    protected $fillable = ['name','brands_id'];


    public function Brands()
    {
        return $this->belongsTo(Brands::getClass());
    }

    public function Publications()
    {
        return $this->hasMany(Publications::getClass());
    }

    public function Categories()
    {
        return $this->belongsToMany(Categories::getClass(),'models_categories');
    }

    public function PurchasePrice(){

        return $this->hasOne(ModelsPurchasePrice::getClass());
    }

    public function SalePrice(){

    }

}