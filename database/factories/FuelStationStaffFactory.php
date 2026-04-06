<?php
namespace Database\Factories;

use App\Models\FuelStation;
use App\Models\FuelStationStaff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FuelStationStaff>
 */
class FuelStationStaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'station_id' => FuelStation::inRandomOrder()->value('id'), // Pick a random station
            'name'       => $this->faker->name(),
            'phone'      => $this->faker->unique()->numerify('01#########'), // Random phone number
            'password'   => bcrypt('password'),                              // Default password for testing
            'status'     => true,
        ];
    }
}
