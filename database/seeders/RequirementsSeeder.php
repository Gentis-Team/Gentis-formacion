<?php

namespace Database\Seeders;

use App\Models\Requirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequirementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Requirement::factory()->create([
            'name' => 'E.S.O',
            'description' => 'Títol de graduat en Educació Secundària Obligatòria o estudis declarats equivalents a efectes acadèmics.',
        ]);

        Requirement::factory()->create([
            'name' => 'Batxiller',
            'description' => 'Títol de batxiller o equivalent a efectes acadèmics.'
        ]);
        
        Requirement::factory()->create([
            'name' => 'Certificat de professionalitat Nivell 1',
            'description' => 'De nivell 1',
        ]);

        Requirement::factory()->create([
            'name' => 'Certificat de professionalitat Nivell 2',
            'description' => 'De nivell 2',
        ]);

        Requirement::factory()->create([
            'name' => 'Cicles formatiu Grau Mitja',
            'description' => 'Haver superat la prova d’accés als cicles formatius de grau mitjà',
        ]);

        Requirement::factory()->create([
            'name' => 'Cicles formatiu Grau Superior',
            'description' => 'Haver superat la prova d’accés als cicles formatius de grau superior',
        ]);

        Requirement::factory()->create([
            'name' => 'Universitat',
            'description' => 'Haver superat la prova d’accés a la universitat per a majors de 25 anys',
        ]);

        Requirement::factory()->create([
            'name' => 'Sense titulacions',
            'description' => 'Si no es disposa d’aquestes titulacions, es podrà accedir si s’han superat amb qualificació d’APTE les proves d’avaluació de les competències claus del nivell del curs',
        ]);
    }
}
