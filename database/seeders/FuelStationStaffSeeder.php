<?php
namespace Database\Seeders;

use App\Models\FuelStationStaff;
use Illuminate\Database\Seeder;

class FuelStationStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelStationStaff::factory()->count(50)->create();
    }
}
