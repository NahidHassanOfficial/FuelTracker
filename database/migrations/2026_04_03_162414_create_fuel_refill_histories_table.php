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
        Schema::create('fuel_refill_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained('fuel_stations');
            $table->foreignId('fuel_type_id')->constrained('fuel_types');
            $table->decimal('stock_amount', 10, 2);
            $table->decimal('buying_price', 10, 2)->comment('Buying price per unit');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_refill_histories');
    }
};
