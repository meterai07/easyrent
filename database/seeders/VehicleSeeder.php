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
            "transmission_id" => 2,
            "name" => "Fortuner",
            "year" => "2019",
            "status" => "AVAILABLE",
            "price" => 1000000
        ]);
        Vehicle::create([
            "vendor_id" => 1,
            "brand_id" => 2,
            "category_id" => 2,
            "fuel_id" => 2,
            "transmission_id" => 1,
            "name" => "Civic",
            "year" => "2022",
            "status" => "RENTED",
            "price" => 2000000
        ]);
        Vehicle::create([
            "vendor_id" => 1,
            "brand_id" => 3,
            "category_id" => 3,
            "fuel_id" => 2,
            "transmission_id" => 1,
            "name" => "Pajero",
            "year" => "2021",
            "status" => "NOT AVAILABLE",
            "price" => 3000000
        ]);
    }
}
