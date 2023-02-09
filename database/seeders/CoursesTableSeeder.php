<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        // Create 50 product records 
        for ($i = 0; $i < 50; $i++) {
            Course::create([
                'title' => $faker->title,
                'category' => $faker->word,
                'description' => $faker->paragraph,
                'image' => $faker->imageUrl(width: 640, height: 480),
            ]);
        }
    }
}