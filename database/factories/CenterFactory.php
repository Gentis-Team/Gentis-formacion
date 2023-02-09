<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Center>
 */
class CenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Gentis Terres de l’Ebre',
            'address' => 'C/Barcelona, 73 43870',
            'phone' => '977099425',
            'email' => 'gentisAmposta@gentis.com',
            'website' => 'www.gentis.org',
            'opening_hours' => '9:00',
            'closing_hours' => '20:00',
        ];
    }
}
