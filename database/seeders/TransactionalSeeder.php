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
            "name" => "tes1",
            "phone_number" => "notes1",
            "address" => "adrtes1",
            "city" => "citytes1",
            "pick_up_date" => "2023-11-06",
            "pick_up_location" => "MT Haryono, Malang",
            "pick_up_time" => "08:00",
            "drop_off_date" => "2023-11-08",
            "drop_off_location" => "MT Haryono, Malang",
            "drop_off_time" => "08:00",
            "total_payment" => 300000,
            "payment_status" => "PROCESS"
        ]);
        Transactional::create([
            "tenant_id" => 1,
            "vehicle_id" => 3,
            "name" => "tes2",
            "phone_number" => "notes2",
            "address" => "adrtes2",
            "city" => "citytes2",
            "pick_up_date" => "2023-11-06",
            "pick_up_location" => "MT Haryono, Malang",
            "pick_up_time" => "08:00",
            "drop_off_date" => "2023-11-07",
            "drop_off_location" => "MT Haryono, Malang",
            "drop_off_time" => "08:00",
            "total_payment" => 500000,
            "payment_status" => "SUCCESS"
        ]);
        Transactional::create([
            "tenant_id" => 1,
            "vehicle_id" => 2,
            "name" => "tes3",
            "phone_number" => "notes3",
            "address" => "adrtes3",
            "city" => "citytes3",
            "pick_up_date" => "2023-10-03",
            "pick_up_location" => "MT Haryono, Malang",
            "pick_up_time" => "08:00",
            "drop_off_date" => "2023-10-05",
            "drop_off_location" => "MT Haryono, Malang",
            "drop_off_time" => "08:00",
            "total_payment" => 3500000,
            "payment_status" => "FAILURE"
        ]);
        Transactional::create([
            "tenant_id" => 1,
            "vehicle_id" => 1,
            "name" => "tes4",
            "phone_number" => "notes4",
            "address" => "adrtes4",
            "city" => "citytes4",
            "pick_up_date" => "2023-11-05",
            "pick_up_location" => "MT Haryono, Malang",
            "pick_up_time" => "08:00",
            "drop_off_date" => "2023-11-06",
            "drop_off_location" => "MT Haryono, Malang",
            "drop_off_time" => "08:00",
            "total_payment" => 400000,
            "payment_status" => "FAILURE"
        ]);
        Transactional::create([
            "tenant_id" => 2,
            "vehicle_id" => 3,
            "name" => "tes5",
            "phone_number" => "notes5",
            "address" => "adrtes5",
            "city" => "citytes5",
            "pick_up_date" => "2023-11-05",
            "pick_up_location" => "MT Haryono, Malang",
            "pick_up_time" => "08:00",
            "drop_off_date" => "2023-11-06",
            "drop_off_location" => "MT Haryono, Malang",
            "drop_off_time" => "08:00",
            "total_payment" => 400000,
            "payment_status" => "SUCCESS"
        ]);
    }
}
