<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class Financings extends Entity{

    protected $table = 'financings';

    protected $fillable = ['financials_id','quota_from','quota_to','quota','coef','type'];


    
}