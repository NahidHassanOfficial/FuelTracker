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
        Schema::create('fuel_stations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('division_id')->constrained('divisions');
            $table->foreignId('district_id')->constrained('districts');
            $table->foreignId('upazila_id')->constrained('upazilas');
            $table->decimal('lat', 10, 7); // 10 digits total, 7 after decimal (10,7 High Precision)
            $table->decimal('long', 10, 7);
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('logo')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_stations');
    }
};
