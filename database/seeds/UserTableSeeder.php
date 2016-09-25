<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

    public function run()
    {

        $user = new \App\Entities\User;

        $user->email = 'john@example.com';
        $user->name = 'das';
        $user->profiles_id = 1;

        $user->save();

    }
}