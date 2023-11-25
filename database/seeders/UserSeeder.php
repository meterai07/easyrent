<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // User::factory()->count(10)->create();

        User::create([
            'NIK' => '1234567890',
            'name' => 'Tengku Muhammad Rafi Rahardiansyah',
            'email' => 'tengkumrafir@gmail.com',
            'phone_number' => '081945103388',
            'password' => bcrypt('password'),
            'isVerified' => true,
            'user_type' => 'VENDOR',
        ]);

        User::create([
            'NIK' => '6215684615',
            'name' => 'Muhammad Bin Djafar',
            'email' => 'muhammadbdjafar@gmail.com',
            'phone_number' => '081945103310',
            'password' => bcrypt('password'),
            'isVerified' => true,
            'user_type' => 'TENANT',
        ]);

        User::create([
            'NIK' => '123123123123123',
            'name' => 'Muhammad Rizqon Maulana',
            'email' => 'muhammadrizqonmaulana4@gmail.com',
            'phone_number' => '0812345678987',
            'password' => bcrypt('hehe1234'),
            'isVerified' => true,
            'user_type' => 'TENANT',
        ]);
    }
}
