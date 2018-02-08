<?php

use Illuminate\Database\Seeder;
use App\Lead;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lead::truncate();

        Lead::create([
            'first'=>'John',
            'last'=>'Scott',
            'email'=>'jscott@gmail.com',
            'phone'=>'612-963-5643',
            'sqf'=>1225
        ]);

        Lead::create([
            'first'=>'Pedro',
            'last'=>'Gomez',
            'email'=>'pgomez@gmail.com',
            'phone'=>'480-861-5633',
            'sqf'=>1500
        ]);

        Lead::create([
            'first'=>'Bill',
            'last'=>'Weldon',
            'email'=>'bweldon@gmail.com',
            'phone'=>'612-865-7742',
            'sqf'=>5000
        ]);

        Lead::create([
            'first'=>'Stephen',
            'last'=>'Farr',
            'email'=>'sfarr@gmail.com',
            'phone'=>'313-199-8467',
            'sqf'=>3500
        ]);

        Lead::create([
            'first'=>'Matt',
            'last'=>'Hanley',
            'email'=>'mhanley@gmail.com',
            'phone'=>'688-457-6523',
            'sqf'=>10000
        ]);

        Lead::create([
            'first'=>'Rene',
            'last'=>'Bustamante',
            'email'=>'rbustamante@gmail.com',
            'phone'=>'612-963-3018',
            'sqf'=>4500
        ]);

    }
}
