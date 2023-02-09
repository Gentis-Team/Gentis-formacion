<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categories;
use App\Models\Collective;
use App\Models\Courses;
use App\Models\Location;
use App\Models\Requirements;
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

        Requirements::factory()->create([
            'title' => 'E.S.O',
            'graduate' => '
            - Títol de graduat en Educació Secundària Obligatòria o estudis declarats equivalents a efectes acadèmics.',
        ]);

        Requirements::factory()->create([
            'title' => 'Batxiller',
            'graduate' => '
            - Títol de batxiller o equivalent a efectes acadèmics.'
        ]);

        
        Requirements::factory()->create([
            'title' => 'Certificat de professionalitat',
            'graduate' => 'De nivell 1',
        ]);

        Requirements::factory()->create([
            'title' => 'Certificat de professionalitat',
            'graduate' => 'De nivell 2',
        ]);

        Requirements::factory()->create([
            'title' => 'Cicles formatius',
            'graduate' => 'Haver superat la prova d’accés als cicles formatius de grau mitjà',
        ]);

        Requirements::factory()->create([
            'title' => 'Cicles formatius',
            'graduate' => 'Haver superat la prova d’accés als cicles formatius de grau superior',
        ]);

        Requirements::factory()->create([
            'title' => 'Universitat',
            'graduate' => 'Haver superat la prova d’accés a la universitat per a majors de 25 anys',
        ]);

        Requirements::factory()->create([
            'title' => 'Sense titulacions',
            'graduate' => 'Si no es disposa d’aquestes titulacions, es podrà accedir si s’han superat amb qualificació d’APTE les proves d’avaluació de les competències claus del nivell del curs',
        ]);

        Categories::factory()->create([
            'name' => '
            - Destacats
            - Formació Subvencionada
            - Administració i gestió',
        ]);

        Categories::factory()->create([
            'name' => '
            - Administració i gestió',
        ]);

        Categories::factory()->create([
            'name' => '
            - Gestió',
        ]);

        Categories::factory()->create([
            'name' => '
            - Destacats',
        ]);

        Categories::factory()->create([
            'name' => '
            - Formació Subvencionada',
        ]);

        Categories::factory()->create([
            'name' => '
            - Formació',
        ]);

        Categories::factory()->create([
            'name' => '
            - Magatzem',
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

        Courses::factory()->create([
            'title' => 'ADGG0508_CEN Operacions auxiliars d’enregistrament i tractament de dades i documents',
            'image' => 'https://www.gentis.org/wp-content/uploads/2017/11/155933-OUEWN1-292-1280x768.jpg',
            'duration' => 'Durada: 360 hores de teoria i 80 hores pràctiques.',
            'location' => 'Lloc: Gentis Girona, Viver Empreses ‘La Maret’ C/ Sant Roc, 2 17190 Salt.',
            'phone' => 'Tel.: 972 40 54 55',
            'mail' => 'Correu: madelgado@gentis.org.',
            'expiration_date' => 'Dates: Inici el 20 de desembre de 2022.',
            'schedules' =>  'Horari: matins de 9:00h a 15:00h.',
            'modality' => 'Semi-presencial',
            'description' => 'Realitzar operacions d’enregistrament de dades, així com transcriure, reproduir i arxivar la informació i documentació requerides en les tasques administratives i de gestió, d’acord amb instruccions, normativa i procediments establerts, de forma coordinada i amb criteris de qualitat, productivitat, seguretat i respecte del medi ambient.',
        ]);

        Courses::factory()->create([
            'title' => 'AFDDGD0208 Gestió integrada de RRHH',
            'image' => 'https://www.gentis.org/wp-content/uploads/2021/02/336852-P9YMDO-43-1280x768.jpg',
            'duration' => 'Durada: 640 hores de teoria i 120 hores pràctiques',
            'location' => 'Lloc: C/ Salvador Espriu, 85 Local 2 - 08005 BARCELONA',
            'phone' => 'Tel.: 606836173 / 93 224 25 96',
            'mail' => 'Correu: emegino@gentis.org o scontreras@gentis.org',
            'expiration_date' => 'Dates: 13 de gener de 2023.',
            'schedules' => 'Horari: matins de 09:00h a 15:00h',
            'modality' => 'Online',
            'description' => 'Realitzar la gestió administrativa de les activitats vinculades a l’administració de recursos humans i de la informació derivada en el marc d’una organització, d’acorde amb els objectius marcats, les normes internes establertes i la legislació vigent.',
        ]);

        Courses::factory()->create([
            'title' => 'ELEE0109 - Muntatge i manteniment d’instal·lacions elèctriques de baixa tensió (Certificat de Professionalitat - Nivell II)',
            'image' => 'https://www.gentis.org/wp-content/uploads/2020/05/CP_insta_electr_Gentis.jpg',
            'duration' => 'Durada: 840 hores de teoria i 80 hores pràctiques',
            'location' => 'Lloc: Gentis Terres de l’Ebre, Av Catalunya, 103 - 43870 Amposta',
            'phone' => 'Tel.: 689091679 / 977099425',
            'mail' => 'Correu: (cpaga@gentis.org)',
            'expiration_date' => 'Dates: inici 2 de gener 2023',
            'schedules' => 'Horari: tardes de 15:30h a 20:30h',
            'modality' => 'Presencial',
            'description' => 'Muntar, mantenir i reparar les instal·lacions elèctriques per baixa tensió compreses en l’àmbit del Reglament Electrònic per baixa tensió, aplicant les tècniques i els procediments requerits en cada cas, aconseguint els criteris de qualitat, en condicions de seguretat i complint la normativa vigent',
        ]);

        Courses::factory()->create([
            'title' => 'COML0309 Organització i gestió de magatzems (Certificat de Professionalitat - Nivell III)',
            'image' => 'https://www.gentis.org/wp-content/uploads/2016/04/CP-Gesti%C3%B3-de-magatzems-Gentis.png',
            'duration' => 'Durada: 320 hores de teoria i 80 hores pràctiques',
            'location' => 'Lloc: C/ Salvador Espriu, 85 Local 2 - 08005 BARCELONA',
            'phone' => 'Tel.: 606836173',
            'mail' => 'Correu: emegino@gentis.org',
            'expiration_date' => 'Dates: Inici 4 de setembre de 2023.',
            'schedules' => 'Horari: matins de 09:00h a 15:00h',
            'modality' => 'Presencial',
            'description' => 'Organitzar i controlar les operacions i els fluxos de mercaderies del magatzem d’acord amb els procediments establerts i la normativa vigent, i assegurar la qualitat i l’optimització de la xarxa de magatzems o de la cadena logística.',
        ]);

        Courses::factory()->create([
            'title' => 'HOTR0208 Operacions bàsiques de restaurant i bar (Certificat de Professionalitat - Nivell I)',
            'image' => 'https://www.gentis.org/wp-content/uploads/2022/12/CP_restaurant_bar_Gentis.png',
            'duration' => 'Durada: 210 hores teòriques, 40 hores formació complementària obligatòria i 80 hores de pràctiques a empresa.',
            'location' => 'Lloc: Gentis Terres de l’Ebre, C/Barcelona, 73 43870 Amposta',
            'phone' => 'Tel.: 616680547 / 977099425',
            'mail' => 'Correu: ngas@gentis.org',
            'expiration_date' => 'Dates: Inici 23 de gener.',
            'schedules' => 'Horari: matins de 09:00h a 15:00h',
            'modality' => 'Presencial',
            'description' => 'El curs et permetrà assistir al servei i preparar i presentar begudes senzilles i menjars ràpids, executant i aplicant operacions, tècniques i normes bàsiques de manipulació, preparació i conservació d’aliments i begudes.',
        ]);
    }
}
