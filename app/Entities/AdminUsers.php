<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 4/8/15
 * Time: 15:01
 */

namespace App\Entities;

class AdminUsers extends Entity
{

    protected $table     = 'admin_users';
    protected $fillable  = ['user', 'password', 'db'];

}