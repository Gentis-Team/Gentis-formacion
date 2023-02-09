<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'CourseFactory',
            'image' => 'image',
            'duration' => 'duration',
            'location' => 'Barcelona',
            'phone' => '123456789',
            'mail' => 'email@email.com',
            'expiration_date' => '2023-12-31',
            'schedules' => '00:00 a 00:00',
            'modality' => 'presencial',
            'description' => 'description',
        ];
    }
}
