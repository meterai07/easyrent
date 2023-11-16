<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            "name"=> "Blimbing",
        ]);
        Location::create([
            "name"=> "Sawojajar",
        ]);
        Location::create([
            "name"=> "Klojen",
        ]);
    }
}
