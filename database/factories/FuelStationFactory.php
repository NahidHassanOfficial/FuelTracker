<?php
namespace Database\Factories;

use App\Models\District;
use App\Models\Division;
use App\Models\FuelStation;
use App\Models\Upazila;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FuelStation>
 */
class FuelStationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $division = Division::inRandomOrder()->first();

        // Pick a district belonging to that division
        $district = District::where('division_id', $division->id)
            ->inRandomOrder()
            ->first();

        // Pick an upazila belonging to that district
        $upazila = Upazila::where('district_id', $district->id)
            ->inRandomOrder()
            ->first();

        return [
            'name'        => $this->faker->company(),
            'division_id' => $division->id,
            'district_id' => $district->id,
            'upazila_id'  => $upazila->id,
            'lat'         => $this->faker->latitude(),
            'long'        => $this->faker->longitude(),
            'phone'       => $this->faker->unique()->numerify('01#########'),
            'email'       => $this->faker->unique()->safeEmail(),
            'password'    => bcrypt('password'), // Default password for testing
            'logo'        => null,
            'status'      => true,
            'is_verified' => random_int(0, 1) === 1, // Randomly set verified status
        ];
    }
}
