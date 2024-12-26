<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'doctor_id' => fake()->unique()->randomNumber(8, true),
            // 'patient_id' => fake()->unique()->randomNumber(8, true),
            'status' => fake()->randomElement(['Scheduled', 'In Progress', 'Cancelled', 'Rescheduled', 'Completed', 'Overdue']),
            'appointment_type' => fake()->randomElement(['General Consultation', 'Emergency Appointment', 'Follow-up Appointment', 'Routine Check-up', 'Diagnostic Appointment', 'Wealth Screening Management', 'Immunization Appointment']),
            'appointment_date' => fake()->date(),
            'appointment-time' => fake()->time(),
            'notes' => fake()->sentence()
        ];
    }
}
