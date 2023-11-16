<?php

namespace Database\Seeders;

use App\Models\Transactional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transactional::create([
            "tenant_id" => 1,
            "vehicle_id" => 1,
            "rent_date" => "2021-09-01 00:00:00",
            "rent_period" => 1,
            "total_payment" => 300000,
            "payment_status" => "SUCCESS"
        ]);
        Transactional::create([
            "tenant_id" => 1,
            "vehicle_id" => 2,
            "rent_date" => "2021-09-01 00:00:00",
            "rent_period" => 1,
            "total_payment" => 500000,
            "payment_status" => "PROCESS"
        ]);
        Transactional::create([
            "tenant_id" => 1,
            "vehicle_id" => 3,
            "rent_date" => "2021-09-01 00:00:00",
            "rent_period" => 1,
            "total_payment" => 400000,
            "payment_status" => "FAILURE"
        ]);
    }
}
