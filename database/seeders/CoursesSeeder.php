<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesSeeder extends Seeder
{
    public function run()
    {

        $course = Course::factory()->create([
            'code' => 'ADGG0508_CEN ',
            'name' => 'Operacions auxiliars d’enregistrament i tractament de dades i documents',
            'image' => 'https://www.gentis.org/wp-content/uploads/2017/11/155933-OUEWN1-292-1280x768.jpg',
            'duration_theory' => 360,
            'duration_practice' => 80,
            'start_date' => '2023-12-20',
            'start_time' => '9:00',
            'end_time' => '15:00',
            'info_file' => 'fitxa.pdf',
            'description' => 'Realitzar operacions d’enregistrament de dades, així com transcriure, reproduir i arxivar la informació i documentació requerides en les tasques administratives i de gestió, d’acord amb instruccions, normativa i procediments establerts, de forma coordinada i amb criteris de qualitat, productivitat, seguretat i respecte del medi ambient.',
            'modality' => 'Semi-presencial',
        ]);

        $course->categories()->attach([
            1, 3
        ]);

        $course = Course::factory()->create([
            'code' => 'AFDDGD0208',
            'name' => 'Gestió integrada de RRHH',
            'image' => 'https://www.gentis.org/wp-content/uploads/2021/02/336852-P9YMDO-43-1280x768.jpg',
            'duration_theory' => 640,
            'duration_practice' => 120,
            'start_date' => '2023-01-23',
            'start_time' => '15:30',
            'end_time' => '20:30',
            'info_file' => 'fitxa.pdf',
            'description' => 'Realitzar la gestió administrativa de les activitats vinculades a l’administració de recursos humans i de la informació derivada en el marc d’una organització, d’acorde amb els objectius marcats, les normes internes establertes i la legislació vigent.',
            'modality' => 'Semi-presencial',
        ]);
        $course->categories()->attach([
            1, 2
        ]);
        $course->requirements()->attach([
            1, 3, 5, 7, 8
        ]);
        $course->groups()->attach([
            2
        ]);

        $course = Course::factory()->create([
            'code' => 'ELEE0109',
            'name' => 'Muntatge i manteniment d’instal·lacions elèctriques de baixa tensió (Certificat de Professionalitat - Nivell II)',
            'image' => 'https://www.gentis.org/wp-content/uploads/2020/05/CP_insta_electr_Gentis.jpg',
            'duration_theory' => 840,
            'duration_practice' => 80,
            'start_date' => '2023-01-23',
            'start_time' => '15:30',
            'end_time' => '20:30',
            'info_file' => 'fitxa.pdf',
            'description' => 'Muntar, mantenir i reparar les instal·lacions elèctriques per baixa tensió compreses en l’àmbit del Reglament Electrònic per baixa tensió, aplicant les tècniques i els procediments requerits en cada cas, aconseguint els criteris de qualitat, en condicions de seguretat i complint la normativa vigent',
            'modality' => 'Semi-presencial',
        ]);
        $course->categories()->attach([
            1, 2, 3
        ]);
        $course->requirements()->attach([
            1, 4, 5, 7, 8
        ]);
        $course->groups()->attach([
            1
        ]);

        $course = Course::factory()->create([
            'code' => 'COML0309',
            'name' => 'Organització i gestió de magatzems (Certificat de Professionalitat - Nivell III)',
            'image' => 'https://www.gentis.org/wp-content/uploads/2016/04/CP-Gesti%C3%B3-de-magatzems-Gentis.png',
            'duration_theory' => 320,
            'duration_practice' => 80,
            'start_date' => '2023-04-23',
            'start_time' => '09:00',
            'end_time' => '15:00',
            'info_file' => 'fitxa.pdf',
            'description' => 'Organitzar i controlar les operacions i els fluxos de mercaderies del magatzem d’acord amb els procediments establerts i la normativa vigent, i assegurar la qualitat i l’optimització de la xarxa de magatzems o de la cadena logística.',
            'modality' => 'Semi-presencial',
        ]);
        $course->categories()->attach([
            2, 4
        ]);
        $course->requirements()->attach([
            1, 3, 5, 7, 8
        ]);
        $course->groups()->attach([
            2
        ]);

        $course = Course::factory()->create([
            'code' => 'HOTR0208',
            'name' => 'Operacions bàsiques de restaurant i bar (Certificat de Professionalitat - Nivell I)',
            'image' => 'https://www.gentis.org/wp-content/uploads/2022/12/CP_restaurant_bar_Gentis.png',
            'duration_theory' => 210,
            'duration_practice' => 40,
            'start_date' => '2023-01-23',
            'start_time' => '09:00',
            'end_time' => '15:00',
            'info_file' => 'fitxa.pdf',
            'description' => 'El curs et permetrà assistir al servei i preparar i presentar begudes senzilles i menjars ràpids, executant i aplicant operacions, tècniques i normes bàsiques de manipulació, preparació i conservació d’aliments i begudes.',
            'modality' => 'Semi-presencial',
        ]);
        $course->categories()->attach([
            2, 5
        ]);
        $course->groups()->attach([
            3
        ]);
    }
}