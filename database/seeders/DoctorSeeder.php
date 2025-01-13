<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::doesntHave('doctor')->inRandomOrder()->get();

        foreach($users as $user) {
            Doctor::create([
                'user_id' => $user->id,
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
                ])
            ]);
        }
    }
}
