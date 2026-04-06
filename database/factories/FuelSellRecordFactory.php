<?php
namespace Database\Factories;

use App\Models\FuelSellRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FuelSellRecord>
 */
class FuelSellRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $station = \App\Models\FuelStation::inRandomOrder()->first();                                         // Pick a random station
        $staff   = \App\Models\FuelStationStaff::where('station_id', $station->id)->inRandomOrder()->first(); // Pick a random staff from that station
        return [
            'station_id'     => $station->id,
            'staff_id'       => $staff->id,
            'vehicle_no'     => $this->faker->unique()->bothify('??-####'),         // Random vehicle number
            'fuel_type_id'   => \App\Models\FuelType::inRandomOrder()->value('id'), // Pick a random fuel type
            'purchase_unit'  => $this->faker->randomFloat(2, 1, 100),               // Random quantity between 1 and 100
            'price_per_unit' => $this->faker->randomFloat(2, 100, 1000),            // Random price between 100 and 1000
            'total_price'    => function (array $attributes) {
                return $attributes['purchase_unit'] * $attributes['price_per_unit'];
            },
        ];
    }
}
