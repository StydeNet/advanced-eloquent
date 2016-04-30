<?php

use Illuminate\Database\Seeder;
use AdvancedELOQUENT\Exam;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Exam::class, 20)->create();
    }
}
