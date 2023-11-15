<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
            "vendor_id" => 1,
            "brand_id" => 1,
            "category_id" => 1,
            "fuel_id" => 1,
            "transmission_id" => 1,
            "name" => "Fortuner",
            "status" => "AVAILABLE",
            "price" => 1000000
        ]);
    }
}
