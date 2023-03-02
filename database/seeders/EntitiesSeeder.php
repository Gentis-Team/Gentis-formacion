<?php

namespace Database\Seeders;

use App\Models\Entity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entity::factory()->create([
            'name'=>'Gobierno de España, Ministerio de Sanidad y Política Social',
            'image'=>'col-gob-esp-sanidad.jpg',
        ]);

        
        Entity::factory()->create([
            'name'=>'Cofinançat per la Unió Europea, Fons Social Europeu',
            'image'=>'col-logo-ue-1080x243.png',
        ]);

        
        Entity::factory()->create([
            'name'=>'SOC, Servei d\'Ocupació de Catalunya',
            'image'=>'Logo-SOC-300x53.png',
        ]);

        Entity::factory()->create([
            'name'=>'Generalitat de Catalunya, Departament d\'Empresa i Treball',
            'image'=>'departament_empresa_treball_gene-300x74.png',
        ]);

        
        Entity::factory()->create([
            'name'=>'Generalitat de Catalunya, Departament d\'Educació',
            'image'=>'Educació-300x111.gif',
        ]);

        
        Entity::factory()->create([
            'name'=>'Fundació La Caixa',
            'image'=>'Fundacio_lacaixa-300x64.jpg',
        ]);
    }
}
