<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsSeeder::class,
            CategoriesSeeder::class,
            RequirementsSeeder::class,
            GroupsSeeder::class,
            CoursesSeeder::class,
            CentersSeeder::class,
            LocationsSeeder::class,
        ]);
    }
}
