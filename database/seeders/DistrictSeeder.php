<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $districts = [
            // Dhaka Division (01)
            ['name' => 'Norshingdi', 'division_id' => 1],
            ['name' => 'Narayangonj', 'division_id' => 1],
            ['name' => 'Munshigonj', 'division_id' => 1],
            ['name' => 'Gazipur', 'division_id' => 1],
            ['name' => 'Manikgonj', 'division_id' => 1],
            ['name' => 'Dhaka', 'division_id' => 1],

            // Faridpur Region (02)
            ['name' => 'Faridpur', 'division_id' => 2],
            ['name' => 'Rajbari', 'division_id' => 2],
            ['name' => 'Gopalgonj', 'division_id' => 2],
            ['name' => 'Madaripur', 'division_id' => 2],
            ['name' => 'Shariatpur', 'division_id' => 2],

            // Barishal Region (03)
            ['name' => 'Barguna', 'division_id' => 3],
            ['name' => 'Bhola', 'division_id' => 3],
            ['name' => 'Jhalokathi', 'division_id' => 3],
            ['name' => 'Barishal', 'division_id' => 3],
            ['name' => 'Patuakhali', 'division_id' => 3],
            ['name' => 'Pirojpur', 'division_id' => 3],

            // Khulna Division (04)
            ['name' => 'Khulna', 'division_id' => 4],
            ['name' => 'Norail', 'division_id' => 4],
            ['name' => 'Magura', 'division_id' => 4],
            ['name' => 'Satkhira', 'division_id' => 4],
            ['name' => 'Bagerhat', 'division_id' => 4],
            ['name' => 'Jhenaidah', 'division_id' => 4],
            ['name' => 'Jessore', 'division_id' => 4],
            ['name' => 'Meherpur', 'division_id' => 4],
            ['name' => 'Chuadanga', 'division_id' => 4],
            ['name' => 'Kushtia', 'division_id' => 4],

            // Sylhet Division (05)
            ['name' => 'Sylhet', 'division_id' => 5],
            ['name' => 'Sunamgonj', 'division_id' => 5],
            ['name' => 'Moulvibazar', 'division_id' => 5],
            ['name' => 'Habiganj', 'division_id' => 5],

            // Mymensingh Division (06)
            ['name' => 'Tangail', 'division_id' => 6],
            ['name' => 'Kishoreganj', 'division_id' => 6],
            ['name' => 'Netrokona', 'division_id' => 6],
            ['name' => 'Jamalpur', 'division_id' => 6],
            ['name' => 'Sherpur', 'division_id' => 6],
            ['name' => 'Mymensingh', 'division_id' => 6],

            // Comilla Division (07)
            ['name' => 'Noakhali', 'division_id' => 7],
            ['name' => 'Feni', 'division_id' => 7],
            ['name' => 'Lakshmipur', 'division_id' => 7],
            ['name' => 'Chandpur', 'division_id' => 7],
            ['name' => 'Brahmanbaria', 'division_id' => 7],
            ['name' => 'Comilla', 'division_id' => 7],

            // Chittagong Division (08)
            ['name' => 'Chittagong', 'division_id' => 8],
            ['name' => 'Cox\'s Bazar', 'division_id' => 8],
            ['name' => 'Khagrachari', 'division_id' => 8],
            ['name' => 'Bandarban', 'division_id' => 8],
            ['name' => 'Rangamati', 'division_id' => 8],

            // Rajshahi Division (09)
            ['name' => 'Bogra', 'division_id' => 9],
            ['name' => 'Pabna', 'division_id' => 9],
            ['name' => 'Rajshahi', 'division_id' => 9],
            ['name' => 'Natore', 'division_id' => 9],
            ['name' => 'Chapai Nawabgonj', 'division_id' => 9],
            ['name' => 'Naogaon', 'division_id' => 9],
            ['name' => 'Joypurhat', 'division_id' => 9],
            ['name' => 'Sirajgonj', 'division_id' => 9],

            // Rangpur Division (10)
            ['name' => 'Nilphamari', 'division_id' => 10],
            ['name' => 'Thakurgaon', 'division_id' => 10],
            ['name' => 'Gaibandha', 'division_id' => 10],
            ['name' => 'Lalmonirhat', 'division_id' => 10],
            ['name' => 'Kurigram', 'division_id' => 10],
            ['name' => 'Dinajpur', 'division_id' => 10],
            ['name' => 'Rangpur', 'division_id' => 10],
            ['name' => 'Panchagarh', 'division_id' => 10],
        ];

        District::insert($districts);
    }
}
