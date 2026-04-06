<?php
namespace Database\Seeders;

use App\Models\FuelRefillHistory;
use Illuminate\Database\Seeder;

class FuelRefillHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelRefillHistory::factory()->count(50)->create();
    }
}
