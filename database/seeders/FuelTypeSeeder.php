<?php
namespace Database\Seeders;

use App\Models\FuelType;
use Illuminate\Database\Seeder;

class FuelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelType::factory()->count(4)->create();
    }
}
