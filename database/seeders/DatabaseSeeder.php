<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'  => 'Admin',
            'email' => 'admin@fueltracker.com',
        ]);

        $this->call([
            DivisionSeeder::class,
            DistrictSeeder::class,
            UpazilaSeeder::class,
            FuelTypeSeeder::class,
            FuelStationSeeder::class,
            FuelStationStaffSeeder::class,
            FuelStockSeeder::class,
            FuelPriceSeeder::class,
            FuelRefillHistorySeeder::class,
            FuelSellRecordSeeder::class,

        ]);
    }
}
