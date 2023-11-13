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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('fuel_id');
            $table->unsignedBigInteger('transmission_id');
            $table->string('name')->unique();
            $table->string('status')->default('available');
            $table->integer('price')->default(0);
            $table->foreign('vendor_id')->references('id')->on('vendors')->onCascadeDelete();
            $table->foreign('brand_id')->references('id')->on('brands')->onCascadeDelete();
            $table->foreign('category_id')->references('id')->on('categories')->onCascadeDelete();
            $table->foreign('fuel_id')->references('id')->on('fuels')->onCascadeDelete();
            $table->foreign('transmission_id')->references('id')->on('transmissions')->onCascadeDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
