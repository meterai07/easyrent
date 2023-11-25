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
            "Booking_no" => "001",
            "pick_up_date" => "2023-11-06",
            "drop_off_date" => "2023-11-08",
            "pick_up_location" => "MT Haryono, Malang",
            "total_payment" => 300000,
            "payment_status" => "Booked"
        ]);
        Transactional::create([
            "tenant_id" => 1,
            "vehicle_id" => 3,
            "Booking_no" => "002",
            "pick_up_date" => "2023-11-06",
            "drop_off_date" => "2023-11-07",
            "pick_up_location" => "MT Haryono, Malang",
            "total_payment" => 500000,
            "payment_status" => "Completed"
        ]);
        Transactional::create([
            "tenant_id" => 1,
            "vehicle_id" => 2,
            "Booking_no" => "003",
            "pick_up_date" => "2023-10-03",
            "drop_off_date" => "2023-10-05",
            "pick_up_location" => "MT Haryono, Malang",
            "total_payment" => 3500000,
            "payment_status" => "Canceled"
        ]);
        Transactional::create([
            "tenant_id" => 1,
            "vehicle_id" => 1,
            "Booking_no" => "004",
            "pick_up_date" => "2023-11-05",
            "drop_off_date" => "2023-11-06",
            "pick_up_location" => "MT Haryono, Malang",
            "total_payment" => 400000,
            "payment_status" => "Canceled"
        ]);
        Transactional::create([
            "tenant_id" => 2,
            "vehicle_id" => 3,
            "Booking_no" => "005",
            "pick_up_date" => "2023-11-05",
            "drop_off_date" => "2023-11-06",
            "pick_up_location" => "MT Haryono, Malang",
            "total_payment" => 400000,
            "payment_status" => "Completed"
        ]);
    }
}
