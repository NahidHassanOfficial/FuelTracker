<?php
namespace Database\Seeders;

use App\Models\FuelPrice;
use Illuminate\Database\Seeder;

class FuelPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelPrice::factory()->count(50)->create();
    }
}
