<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        User::create([
            'name'=>'Carlos Gabaldon',
            'email'=>'carlos@boldleads.com',
            'password'=>bcrypt('carlos_gabaldon_2018'),
            'is_admin'=>1
        ]);

        User::create([
            'name'=>'Rene Bustamante',
            'email'=>'rbustamante@boldleads.com',
            'password'=>bcrypt('password'),
            'is_admin'=>0
        ]);
    }
}
