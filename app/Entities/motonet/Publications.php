<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Publications extends Entity{

    protected $table = 'publications';

    protected $fillable = ['publication_date','title','price','items_id','description'];




}