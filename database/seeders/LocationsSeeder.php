<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = Location::factory()->create([
            'name' => 'Barcelona',
        ]);
        $center = Center::find(4);
        $location->centers()->save($center);
        
        $location = Location::factory()->create([
            'name' => 'Amposta',
        ]);
        $center = Center::find(1);
        $location->centers()->save($center);

        $location = Location::factory()->create([
            'name' => 'Girona',
        ]);

        $location = Location::factory()->create([
            'name' => 'Salt',
        ]);
        $center = Center::find(3);
        $location->centers()->save($center);
        
        $location = Location::factory()->create([
            'name' => 'Vilassar de Dalt',
        ]);
        $center = Center::find(2);
        $location->centers()->save($center);
    }
}
