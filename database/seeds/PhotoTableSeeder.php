<?php

use Illuminate\Database\Seeder;
use AdvancedELOQUENT\Photo;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::create(['photo' => '1.jpg',  'user_id' => 1]);
        Photo::create(['photo' => '2.jpg',  'user_id' => 1]);
        Photo::create(['photo' => '3.jpg',  'user_id' => 1]);
        Photo::create(['photo' => '4.jpg',  'user_id' => 2]);
        Photo::create(['photo' => '5.jpg',  'user_id' => 2]);
        Photo::create(['photo' => '6.jpg',  'user_id' => 2]);
        Photo::create(['photo' => '7.jpg',  'user_id' => 3]);
        Photo::create(['photo' => '8.jpg',  'user_id' => 3]);
        Photo::create(['photo' => '9.jpg',  'user_id' => 3]);
        Photo::create(['photo' => '10.jpg', 'user_id' => 3]);
    }
}
