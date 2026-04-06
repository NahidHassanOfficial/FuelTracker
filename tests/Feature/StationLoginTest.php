<?php

use App\Enums\Enums\StatusEnum;
use App\Enums\Enums\VerifiedEnum;
use App\Models\FuelStation;
use Database\Seeders\DistrictSeeder;
use Database\Seeders\DivisionSeeder;
use Database\Seeders\UpazilaSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed(DivisionSeeder::class);
    $this->seed(DistrictSeeder::class);
    $this->seed(UpazilaSeeder::class);
});

// getting the station login page
test('station login page loads', function () {
    $response = $this->get(route('station.login.view'));
    $response->assertStatus(200);
});

// testing station login with valid credentials
test('station can login with valid credentials', function () {
    // Create a station user
    $station = FuelStation::factory()->create([
        'phone' => fake()->unique()->numerify('01#########'), // generate a valid phone number
        'password' => 'secret123',
        'status' => StatusEnum::ACTIVE->value,
        'is_verified' => VerifiedEnum::VERIFIED->value,
    ]);

    // POST login request
    $response = $this->post(route('station.login.post'), [
        'phone' => $station->phone,
        'password' => 'secret123',
    ]);

    $response->assertRedirect('/station/dashboard'); // should redirect after login
    $this->assertAuthenticatedAs($station, 'station'); // check if session auth worked
});

test('station login fails with invalid credentials', function () {
    $station = FuelStation::factory()->create([
        'phone' => '01712345678',
        'password' => Hash::make('secret123'),
        'status' => StatusEnum::ACTIVE->value,
        'is_verified' => VerifiedEnum::VERIFIED->value,
    ]);

    $response = $this->post(route('station.login.post'), [
        'phone' => $station->phone,
        'password' => 'wrongpassword',
    ]);

    $response->assertSessionHasErrors('error'); // error key from your controller
    $this->assertGuest(); // not authenticated
});

test('station login fails with invalid phone format', function () {
    $response = $this->post(route('station.login.post'), [
        'phone' => 'invalidphone',
        'password' => 'secret123',
    ]);

    $response->assertSessionHasErrors('phone');
    $this->assertGuest();
});

test('station login fails with short password', function () {
    $response = $this->post(route('station.login.post'), [
        'phone' => '01712345678',
        'password' => 'sho', // less than 4 characters
    ]);

    $response->assertSessionHasErrors('password');
    $this->assertGuest();
});

test('station login fails if not verified or inactive', function () {
    $station = FuelStation::factory()->create([
        'phone' => '01712345678',
        'password' => Hash::make('secret123'),
        'status' => StatusEnum::INACTIVE->value,
        'is_verified' => VerifiedEnum::UNVERIFIED->value,
    ]);
    $response = $this->post(route('station.login.post'), [
        'phone' => $station->phone,
        'password' => 'secret123',
    ]);
    $response->assertSessionHasErrors('error');
    $this->assertGuest();

});
