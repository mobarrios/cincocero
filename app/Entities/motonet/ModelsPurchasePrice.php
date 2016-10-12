<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class ModelsPurchasePrice extends Entity{

    protected $table = 'models_purchase_price';

    protected $fillable = ['price','flete_price','models_id'];



}