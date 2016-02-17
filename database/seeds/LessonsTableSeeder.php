<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

Class LessonsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,30) as $index) {
            App\Lesson::create([
                   'title' => $faker->sentence(5),
                   'body'  => $faker->paragraph(4)
                ]);
        }
    }

}
