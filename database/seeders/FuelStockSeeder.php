<?php
namespace Database\Seeders;

use App\Models\FuelStock;
use Illuminate\Database\Seeder;

class FuelStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelStock::factory()->count(50)->create();
    }
}
