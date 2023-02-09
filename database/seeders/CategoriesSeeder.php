<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'Administració i gestió',
        ]);

        Category::factory()->create([
            'name' => 'Destacats',
        ]);

        Category::factory()->create([
            'name' => 'Magatzem',
        ]);

        Category::factory()->create([
            'name' => 'Socorrisme',
        ]);
        
        Category::factory()->create([
            'name' => 'Imatge personal',
        ]);
    }
}
