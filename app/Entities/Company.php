<?php
namespace App\Entities;

use \App\Entities\Entity;


class Company extends Entity{

    protected $table = 'company';

    protected $fillable = ['name','address','phone','cuit'];



}