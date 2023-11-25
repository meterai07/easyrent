<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->string('Booking_no');
            // $table->string('name');
            // $table->string('phone_number');
            // $table->string('address');
            // $table->string('city');
            $table->date('pick_up_date')->date_format('Y-m-d');
            $table->string('pick_up_location');
            // $table->time('pick_up_time')->time_format('H:i');
            $table->date('drop_off_date')->date_format('Y-m-d');
            // $table->string('drop_off_location');
            // $table->time('drop_off_time')->time_format('H:i');
            $table->integer('total_payment');
            $table->enum('payment_status', ['Completed','Booked', 'Canceled'])->default('Booked');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onCascadeDelete();
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onCascadeDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactionals');
    }
};
