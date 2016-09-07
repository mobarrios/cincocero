<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class ModelsSalePrice extends Entity{

    protected $table = 'models_sale_price';

    protected $fillable = ['price','patentamiento_price','formulario_price','models_id','max_discount'];



}