<?php

namespace Tests\Feature;

use App\Models\FuelStation;
use Database\Seeders\DistrictSeeder;
use Database\Seeders\DivisionSeeder;
use Database\Seeders\UpazilaSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use App\Events\StationRegistered;

uses(RefreshDatabase::class);

beforeEach(function () {
    // Seed essential geographical data for registration
    $this->seed([
        DivisionSeeder::class,
        DistrictSeeder::class,
        UpazilaSeeder::class,
    ]);
});

test('station registration page can be rendered', function () {
    $response = $this->get(route('station.register.view'));
    $response->assertStatus(200);
});

test('station can register with valid data from factory', function () {
    Event::fake();

    // Use factory to generate base data (matches database columns)
    $stationData = FuelStation::factory()->make()->toArray();

    // Supplement with data required by RegistrationRequest but not in factory (like confirmation)
    $stationData['password'] = 'password123';
    $stationData['password_confirmation'] = 'password123';

    $response = $this->from(route('station.register.view'))
        ->post(route('station.register.post'), $stationData);

    // Assert successful redirect to register page with success flag
    $response->assertStatus(302);
    $response->assertRedirect(route('station.register.view'));
    $response->assertSessionHas('registered');

    // Assert data was persisted
    $this->assertDatabaseHas('fuel_stations', [
        'phone' => $stationData['phone'],
        'email' => $stationData['email'],
    ]);

    // Assert password was hashed
    $station = FuelStation::where('email', $stationData['email'])->first();
    expect(password_verify('password123', $station->password))->toBeTrue();

    // Assert registration event was dispatched
    Event::assertDispatched(StationRegistered::class);
});

test('registration fails if required fields are missing (Request Validation)', function () {
    $response = $this->post(route('station.register.post'), []);

    $response->assertStatus(302);
    $response->assertSessionHasErrors([
        'name', 'division_id', 'district_id', 'upazila_id',
        'lat', 'long', 'phone', 'email', 'password'
    ]);
});

test('registration fails with invalid phone format', function () {
    $stationData = FuelStation::factory()->make([
        'phone' => '12345', // Invalid format
    ])->toArray();
    $stationData['password'] = 'password123';
    $stationData['password_confirmation'] = 'password123';

    $response = $this->post(route('station.register.post'), $stationData);

    $response->assertStatus(302);
    $response->assertSessionHasErrors(['phone']);
});

test('registration fails if email is not unique', function () {
    // Create an existing station
    $existingStation = FuelStation::factory()->create(['email' => 'duplicate@example.com']);

    // Attempt to register another station with same email
    $stationData = FuelStation::factory()->make(['email' => 'duplicate@example.com'])->toArray();
    $stationData['password'] = 'password123';
    $stationData['password_confirmation'] = 'password123';

    $response = $this->post(route('station.register.post'), $stationData);

    $response->assertStatus(302);
    $response->assertSessionHasErrors(['email']);
});