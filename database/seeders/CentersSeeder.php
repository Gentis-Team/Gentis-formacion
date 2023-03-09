<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $center = Center::factory()->create([
            'name' => 'Gentis Terres de l’Ebre',
            'address' => 'C/Barcelona, 73 43870',
            'phone' => '977099425',
            'email' => 'gentisAmposta@gentis.com',
            'website' => 'www.gentis.org',
        ]);
        $course = Course::find(5);
        $center->courses()->save($course);
        
        $center = Center::factory()->create([
            'name' => 'Gentis Maresme Museu Arxiu',
            'address' => 'C/Marquès de Barberà, 9 (Can Banus)',
            'phone' => '932242596',
            'email' => 'gentisVilassar@gentis.com',
            'website' => 'www.gentis.org',
        ]);
        $course = Course::find(4);
        $center->courses()->save($course);

        $center = Center::factory()->create([
            'name' => 'Gentis Girona, Viver Empreses ‘La Maret’',
            'address' => 'C/ Sant Roc, 2 17190',
            'phone' => '972405455',
            'email' => 'gentisSalt@gentis.com',
            'website' => 'www.gentis.org',
        ]);
        $course = Course::find(1);
        $center->courses()->save($course);
        

        $center = Center::factory()->create([
            'name' => 'Gentis Barcelona',
            'address' => 'C/ Salvador Espriu, 85 Local 2 08005',
            'phone' => '932242596',
            'email' => 'gentisSalt@gentis.com',
            'website' => 'www.gentis.org',
        ]);
        $course = Course::find(2);
        $center->courses()->save($course);
        $course = Course::find(3);
        $center->courses()->save($course);
        



    }
}
