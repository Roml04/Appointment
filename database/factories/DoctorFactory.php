<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'specialization' => fake()->randomElement([
                'Cardiology',
                'Neurology',
                'Pediatrics',
                'Orthopedics',
                'Dermatology',
                'Oncology',
                'Psychiatry',
                'Gynecology',
                'Radiology',
                'Urology'
            ]),
        ];
    }
}
