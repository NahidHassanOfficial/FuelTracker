<?php
namespace Database\Factories;

use App\Models\FuelRefillHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FuelRefillHistory>
 */
class FuelRefillHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'station_id'   => \App\Models\FuelStation::inRandomOrder()->value('id'), // Pick a random station
            'fuel_type_id' => \App\Models\FuelType::inRandomOrder()->value('id'),    // Pick a random fuel type
            'stock_amount' => $this->faker->randomFloat(2, 100, 10000),              // Random quantity between 100 and 10000
            'buying_price' => $this->faker->randomFloat(2, 100, 1000),               // Random price between 100 and 1000
        ];
    }
}
