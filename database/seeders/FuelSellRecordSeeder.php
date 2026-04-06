<?php
namespace Database\Seeders;

use App\Models\FuelSellRecord;
use Illuminate\Database\Seeder;

class FuelSellRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelSellRecord::factory()->count(50)->create();
    }
}
