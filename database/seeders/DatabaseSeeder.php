<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Collective;
use App\Models\Course;
use App\Models\Location;
use App\Models\Requirement;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //create demo posts

        $requirement1 = Requirement::factory()->create([
            'title' => 'E.S.O',
            'graduate' => 'Títol de graduat en Educació Secundària Obligatòria o estudis declarats equivalents a efectes acadèmics.',
        ]);

        $requirement2 = Requirement::factory()->create([
            'title' => 'Batxiller',
            'graduate' => 'Títol de batxiller o equivalent a efectes acadèmics.'
        ]);
        
        $requirement3 = Requirement::factory()->create([
            'title' => 'Certificat de professionalitat',
            'graduate' => 'De nivell 1',
        ]);

        $requirement4 = Requirement::factory()->create([
            'title' => 'Certificat de professionalitat',
            'graduate' => 'De nivell 2',
        ]);

        $requirement5 = Requirement::factory()->create([
            'title' => 'Cicles formatius',
            'graduate' => 'Haver superat la prova d’accés als cicles formatius de grau mitjà',
        ]);

        $requirement6 = Requirement::factory()->create([
            'title' => 'Cicles formatius',
            'graduate' => 'Haver superat la prova d’accés als cicles formatius de grau superior',
        ]);

        $requirement7 = Requirement::factory()->create([
            'title' => 'Universitat',
            'graduate' => 'Haver superat la prova d’accés a la universitat per a majors de 25 anys',
        ]);

        $requirement8 = Requirement::factory()->create([
            'title' => 'Sense titulacions',
            'graduate' => 'Si no es disposa d’aquestes titulacions, es podrà accedir si s’han superat amb qualificació d’APTE les proves d’avaluació de les competències claus del nivell del curs',
        ]);

        $category1 = Category::factory()->create([
            'name' => 'Administració i gestió',
        ]);

        $category2 = Category::factory()->create([
            'name' => 'Destacats',
        ]);

        $category3 = Category::factory()->create([
            'name' => 'Magatzem',
        ]);

        $category4 = Category::factory()->create([
            'name' => 'Socorrisme',
        ]);
        $category5 = Category::factory()->create([
            'name' => 'Imatge personal',
        ]);

        Collective::factory()->create([
            'name' => 'Para discapacitados',
        ]);

        Collective::factory()->create([
            'name' => 'Para mujeres',
        ]);

        Collective::factory()->create([
            'name' => 'Para mayores de 55 años',
        ]);

        Collective::factory()->create([
            'name' => 'Para inmigrantes',
        ]);

        Collective::factory()->create([
            'name' => 'Para jóvenes',
        ]);

        $course1 = Course::factory()->create([
            'title' => 'ADGG0508_CEN Operacions auxiliars d’enregistrament i tractament de dades i documents',
            'image' => 'https://www.gentis.org/wp-content/uploads/2017/11/155933-OUEWN1-292-1280x768.jpg',
            'duration_theory' => 360,
            'duration_practice' => 80,
            'start_date' => '2023-12-20',
            'start_time' => '9:00',
            'end_time' => '15:00',
            'description' => 'Realitzar operacions d’enregistrament de dades, així com transcriure, reproduir i arxivar la informació i documentació requerides en les tasques administratives i de gestió, d’acord amb instruccions, normativa i procediments establerts, de forma coordinada i amb criteris de qualitat, productivitat, seguretat i respecte del medi ambient.',
            'modality' => 'Semi-presencial',
        ]);
        $course1->categories()->attach($category1);
        $course1->categories()->attach($category3);

        $course2 = Course::factory()->create([
            'title' => 'AFDDGD0208 Gestió integrada de RRHH',
            'image' => 'https://www.gentis.org/wp-content/uploads/2021/02/336852-P9YMDO-43-1280x768.jpg',
            'duration_theory' => 640,
            'duration_practice' => 120,
            'start_date' => '2023-01-23',
            'start_time' => '15:30',
            'end_time' => '20:30',
            'description' => 'Realitzar la gestió administrativa de les activitats vinculades a l’administració de recursos humans i de la informació derivada en el marc d’una organització, d’acorde amb els objectius marcats, les normes internes establertes i la legislació vigent.',
            'modality' => 'Semi-presencial',
        ]);
        $course2->categories()->attach($category1);
        $course2->categories()->attach($category2);
        $course2->requirements()->attach($requirement1);
        $course2->requirements()->attach($requirement3);
        $course2->requirements()->attach($requirement5);
        $course2->requirements()->attach($requirement7);
        $course2->requirements()->attach($requirement8);

        $course3 = Course::factory()->create([
            'title' => 'ELEE0109 - Muntatge i manteniment d’instal·lacions elèctriques de baixa tensió (Certificat de Professionalitat - Nivell II)',
            'image' => 'https://www.gentis.org/wp-content/uploads/2020/05/CP_insta_electr_Gentis.jpg',
            'duration_theory' => 840,
            'duration_practice' => 80,
            'start_date' => '2023-01-23',
            'start_time' => '15:30',
            'end_time' => '20:30',
            'description' => 'Muntar, mantenir i reparar les instal·lacions elèctriques per baixa tensió compreses en l’àmbit del Reglament Electrònic per baixa tensió, aplicant les tècniques i els procediments requerits en cada cas, aconseguint els criteris de qualitat, en condicions de seguretat i complint la normativa vigent',
            'modality' => 'Semi-presencial',
        ]);
        $course3->categories()->attach($category1);
        $course3->categories()->attach($category2);
        $course3->categories()->attach($category3);
        $course3->requirements()->attach($requirement1);
        $course3->requirements()->attach($requirement4);
        $course3->requirements()->attach($requirement5);
        $course3->requirements()->attach($requirement7);
        $course3->requirements()->attach($requirement8);

        $course4 = Course::factory()->create([
            'title' => 'COML0309 Organització i gestió de magatzems (Certificat de Professionalitat - Nivell III)',
            'image' => 'https://www.gentis.org/wp-content/uploads/2016/04/CP-Gesti%C3%B3-de-magatzems-Gentis.png',
            'duration_theory' => 320,
            'duration_practice' => 80,
            'start_date' => '2023-04-23',
            'start_time' => '09:00',
            'end_time' => '15:00',
            'description' => 'Organitzar i controlar les operacions i els fluxos de mercaderies del magatzem d’acord amb els procediments establerts i la normativa vigent, i assegurar la qualitat i l’optimització de la xarxa de magatzems o de la cadena logística.',
            'modality' => 'Semi-presencial',
        ]);
        $course2->categories()->attach($category2);
        $course2->categories()->attach($category4);
        $course4->requirements()->attach($requirement1);
        $course4->requirements()->attach($requirement3);
        $course4->requirements()->attach($requirement5);
        $course4->requirements()->attach($requirement7);
        $course4->requirements()->attach($requirement8);

        $course5 = Course::factory()->create([
            'title' => 'HOTR0208 Operacions bàsiques de restaurant i bar (Certificat de Professionalitat - Nivell I)',
            'image' => 'https://www.gentis.org/wp-content/uploads/2022/12/CP_restaurant_bar_Gentis.png',
            'duration_theory' => 210,
            'duration_practice' => 40,
            'start_date' => '2023-01-23',
            'start_time' => '09:00',
            'end_time' => '15:00',
            'description' => 'El curs et permetrà assistir al servei i preparar i presentar begudes senzilles i menjars ràpids, executant i aplicant operacions, tècniques i normes bàsiques de manipulació, preparació i conservació d’aliments i begudes.',
            'modality' => 'Semi-presencial',
        ]);
        $course5->categories()->attach($category2);
        $course5->categories()->attach($category5);
    }
}
