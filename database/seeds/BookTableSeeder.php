<?php

use Illuminate\Database\Seeder;
use AdvancedELOQUENT\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class, 20)->create();
    }
}
