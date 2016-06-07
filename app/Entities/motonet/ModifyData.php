<?php
namespace App\Entities\motonet;

use \App\Entities\Entity;

class ModifyData extends Entity{

    protected $table = 'modify_data';

    protected $fillable = ['table_id','table_name','table_column_name','old_data'];



}