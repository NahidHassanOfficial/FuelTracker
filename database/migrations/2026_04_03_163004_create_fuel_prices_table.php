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
        Schema::create('fuel_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained('fuel_stations');
            $table->foreignId('fuel_type_id')->constrained('fuel_types');
            $table->decimal('price', 10, 2)->comment('Price per unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_prices');
    }
};
