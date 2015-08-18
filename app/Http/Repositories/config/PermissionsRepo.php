<?php

namespace App\Http\Repositories\config;

use App\Entities\Modules;
use App\Entities\Permissions;
use App\Entities\Profile;
use App\Http\Repositories\BaseRepo;

class PermissionsRepo extends BaseRepo {

    public function getModel()
    {
        return new Permissions();
    }





}