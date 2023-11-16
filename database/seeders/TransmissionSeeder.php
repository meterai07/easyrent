<?php

namespace Database\Seeders;

use App\Models\Transmission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transmission::create([
            "transmissions_type" => "Matic"
        ]);
        Transmission::create([
            "transmissions_type" => "Manual"
        ]);
    }
}
