<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::doesntHave('patient')->inRandomOrder()->get();
        
        foreach($users as $user) {
            
            Patient::create([
                'user_id' => $user->id,
            ]);

        }
    }
}
