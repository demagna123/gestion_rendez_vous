<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'bellabaly06@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'bellabaly06@gmail.com',
                'password' => Hash::make('Isabella27@'),
                'role' => 'admin',
            ]);
        }

        if (!User::where('email', 'medecin@gmail.com')->exists()) {
            User::create([
                'name' => 'Doctor',
                'email' => 'medecin@gmail.com',
                'password' => Hash::make('Medecin123@'),
                'role' => 'doctor',
            ]);
        }

        
        if (!User::where('email', 'patient@gmail.com')->exists()) {
            User::create([
                'name' => 'Patient',
                'email' => 'patient@gmail.com',
                'password' => Hash::make('Patient123@'),
                'role' => 'patient',
            ]);
        }
        

    }
}
