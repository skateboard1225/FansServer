<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<100;$i++)
        {
           \App\Users::create(
              ['name'=>"user$i",
               'password'=>"password$i",
               'phone'=>"1322315873$i"
              ]

           );
        }
    }
}
