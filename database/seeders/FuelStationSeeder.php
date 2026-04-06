<?php
namespace Database\Seeders;

use App\Models\FuelStation;
use Illuminate\Database\Seeder;

class FuelStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelStation::factory()->count(3)->create();
    }
}
