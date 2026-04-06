<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            ['name' => 'Dhaka'],
            ['name' => 'Faridpur'],
            ['name' => 'Barishal'],
            ['name' => 'Khulna'],
            ['name' => 'Sylhet'],
            ['name' => 'Mymensingh'],
            ['name' => 'Comilla'],
            ['name' => 'Chittagong'],
            ['name' => 'Rajshahi'],
            ['name' => 'Rangpur'],
        ];

        Division::insert($divisions);
    }
}
