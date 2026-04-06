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
        Schema::create('fuel_sell_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained('fuel_stations');
            $table->foreignId('staff_id')->constrained('fuel_station_staffs');
            $table->string('vehicle_no')->index();
            $table->foreignId('fuel_type_id')->constrained('fuel_types');
            $table->decimal('purchase_unit', 10, 2);
            $table->decimal('price_per_unit', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_sell_records');
    }
};
