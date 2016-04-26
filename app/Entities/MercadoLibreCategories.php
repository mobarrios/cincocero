<?php
namespace App\Entities;

use \App\Entities;

class MercadoLibreCategories extends Entity{

    protected $table = 'ml_categories';

    protected $fillable = ['name','ml_main','ml_id'];




}