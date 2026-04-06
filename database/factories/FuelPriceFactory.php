<?php
namespace Database\Factories;

use App\Models\FuelPrice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FuelPrice>
 */
class FuelPriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = FuelPrice::class;
    public function definition(): array
    {
        return [
            'station_id'   => \App\Models\FuelStation::inRandomOrder()->value('id'), // Pick a random station
            'fuel_type_id' => \App\Models\FuelType::inRandomOrder()->value('id'),    // Pick a random fuel type
            'price'        => $this->faker->randomFloat(2, 100, 1000),               // Random price between 100 and 1000
        ];
    }
}
