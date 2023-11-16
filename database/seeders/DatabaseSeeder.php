<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\FuelSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\TenantSeeder;
use Database\Seeders\VendorSeeder;
use Database\Seeders\VehicleSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\LocationSeeder;
use Database\Seeders\TransactionalSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LocationSeeder::class,
            VendorSeeder::class,
            TenantSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            FuelSeeder::class,
            VehicleSeeder::class,
            TransactionalSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
