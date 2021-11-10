<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{

    public function run()
    {
    DB::table('users')->insert([
        'name'=>'Çağatay',
        'surname'=>'Üçer',
        'email'=>'cagataygia@gmail.com',
        'password'=>Hash::make('123456'),
        'created_at'=>now(),
        'updated_at'=>now(),
    ]);
    }
}
