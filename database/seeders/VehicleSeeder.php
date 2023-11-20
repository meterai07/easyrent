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
            "name" => "Fortuner",
            "year" => "2019",
            "transmissions_type" => "Manual",
            "status" => "AVAILABLE",
            "price" => 1000000
        ]);
        Vehicle::create([
            "vendor_id" => 1,
            "brand_id" => 2,
            "category_id" => 2,
            "fuel_id" => 2,
            "name" => "Civic",
            "year" => "2022",
            "transmissions_type" => "Matic",
            "status" => "RENTED",
            "price" => 2000000
        ]);
        Vehicle::create([
            "vendor_id" => 1,
            "brand_id" => 3,
            "category_id" => 3,
            "fuel_id" => 2,
            "name" => "Pajero",
            "year" => "2021",
            "transmissions_type" => "Manual",
            "status" => "NOT AVAILABLE",
            "price" => 3000000
        ]);
        Vehicle::create([
            "vendor_id" => 1,
            "brand_id" => 3,
            "category_id" => 3,
            "fuel_id" => 2,
            "name" => "Land Cruiser",
            "year" => "2021",
            "transmissions_type" => "Manual",
            "status" => "NOT AVAILABLE",
            "price" => 3000000
        ]);
        Vehicle::create([
            "vendor_id" => 1,
            "brand_id" => 3,
            "category_id" => 3,
            "fuel_id" => 2,
            "name" => "Range Rover",
            "year" => "2021",
            "transmissions_type" => "Manual",
            "status" => "NOT AVAILABLE",
            "price" => 3000000
        ]);
        Vehicle::create([
            "vendor_id" => 1,
            "brand_id" => 4,
            "category_id" => 4,
            "fuel_id" => 2,
            "name" => "Ninja 300",
            "year" => "2021",
            "transmissions_type" => "Manual",
            "status" => "AVAILABLE",
            "price" => 1200000
        ]);
        
        Vehicle::create([
            "vendor_id" => 1,
            "brand_id" => 2,
            "category_id" => 4,
            "fuel_id" => 2,
            "name" => "CBR500R",
            "year" => "2022",
            "transmissions_type" => "Manual",
            "status" => "RENTED",
            "price" => 1800000
        ]);
        
        Vehicle::create([
            "vendor_id" => 2,
            "brand_id" => 5,
            "category_id" => 5,
            "fuel_id" => 2,
            "name" => "Harley-Davidson Street Glide",
            "year" => "2020",
            "transmissions_type" => "Manual",
            "status" => "AVAILABLE",
            "price" => 2500000
        ]);
        
        Vehicle::create([
            "vendor_id" => 2,
            "brand_id" => 6,
            "category_id" => 6,
            "fuel_id" => 2,
            "name" => "Ducati Panigale V4",
            "year" => "2021",
            "transmissions_type" => "Automatic",
            "status" => "NOT AVAILABLE",
            "price" => 3500000
        ]);
        

    }
}
