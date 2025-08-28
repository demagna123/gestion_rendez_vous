<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Doctor',
            'email' => 'medecin@gmail.com',
            'password' => Hash::make('Medecin123@'),
            'role' => 'doctor',
        ]);

    }
}
