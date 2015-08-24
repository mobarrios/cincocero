<?php
namespace App\Entities;


class Images extends Entity{

    protected $table    = 'images';

    protected $fillable = ['entity','entity_id','image'];


}