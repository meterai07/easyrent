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
            $table->timestamp('rent_date');
            $table->integer('rent_period');
            $table->integer('total_payment');
            $table->enum('payment_status', ['SUCCESS','PROCESS', 'FAILURE'])->default('PROCESS');
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
