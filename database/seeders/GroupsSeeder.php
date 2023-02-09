<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::factory()->create([
            'name' => 'Persones amb discapacitat',
        ]);

        Group::factory()->create([
            'name' => 'Dones',
        ]);

        Group::factory()->create([
            'name' => 'Majors de 45 anys',
        ]);

        Group::factory()->create([
            'name' => 'Persones migrants',
        ]);

        Group::factory()->create([
            'name' => 'Menors de 25 anys',
        ]);
    }
}
