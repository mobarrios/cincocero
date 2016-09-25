<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProfilesTableSeeder extends Seeder {

    public function run()
    {

        \Illuminate\Support\Facades\DB::table('profiles')->insert(
            ['id'=> 1 ,'profile' => 'super_user', 'home' => 'home']
        );
    }
}