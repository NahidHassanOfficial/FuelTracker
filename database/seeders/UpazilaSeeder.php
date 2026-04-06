<?php

namespace Database\Seeders;

use App\Models\Upazila;
use Illuminate\Database\Seeder;

class UpazilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $upazilas = [
            // ========== Dhaka Division (District 1-6) ==========
            // Norshingdi (1)
            ['name' => 'Sadar Upozila', 'district_id' => 1],
            ['name' => 'Monorhordi Upozila', 'district_id' => 1],
            ['name' => 'Shibpur Upozila', 'district_id' => 1],
            ['name' => 'Palash Upozila', 'district_id' => 1],
            ['name' => 'Belab Upozila', 'district_id' => 1],
            ['name' => 'Raipura Upozila', 'district_id' => 1],

            // Narayangonj (2)
            ['name' => 'Sadar Upozila', 'district_id' => 2],
            ['name' => 'Bandor Upozila', 'district_id' => 2],
            ['name' => 'Sonargaon Upozila', 'district_id' => 2],
            ['name' => 'Arai Hazar Upozila', 'district_id' => 2],
            ['name' => 'Rupgonj Upozila', 'district_id' => 2],

            // Munshigonj (3)
            ['name' => 'Sadar Upozila', 'district_id' => 3],
            ['name' => 'Tungibari Upozila', 'district_id' => 3],
            ['name' => 'Louhagonj Upozila', 'district_id' => 3],
            ['name' => 'Sree Nagar Upozila', 'district_id' => 3],
            ['name' => 'Sirajdi Khan Upozila', 'district_id' => 3],
            ['name' => 'Gazaria Upozila', 'district_id' => 3],

            // Gazipur (4)
            ['name' => 'Sadar Upozila', 'district_id' => 4],
            ['name' => 'Tongi Upozila', 'district_id' => 4],
            ['name' => 'Kaligonj Upozila', 'district_id' => 4],
            ['name' => 'Kaliakoir Upozila', 'district_id' => 4],
            ['name' => 'Kapashia Upozila', 'district_id' => 4],
            ['name' => 'Sreepur Upozila', 'district_id' => 4],

            // Manikgonj (5)
            ['name' => 'Sadar Upozila', 'district_id' => 5],
            ['name' => 'Singair Upozila', 'district_id' => 5],
            ['name' => 'Daulatpur Upozila', 'district_id' => 5],
            ['name' => 'Horirampur Upozila', 'district_id' => 5],
            ['name' => 'Gheor Upozila', 'district_id' => 5],
            ['name' => 'Shibaloy Upozila', 'district_id' => 5],
            ['name' => 'Saturia Upozila', 'district_id' => 5],

            // Dhaka (6)
            ['name' => 'Kotwali Thana', 'district_id' => 6],
            ['name' => 'Mohammadpur Thana', 'district_id' => 6],
            ['name' => 'Lalbagh Thana', 'district_id' => 6],
            ['name' => 'Sutrapur Thana', 'district_id' => 6],
            ['name' => 'Motijheel Thana', 'district_id' => 6],
            ['name' => 'Demra Thana', 'district_id' => 6],
            ['name' => 'Sabujbagh Thana', 'district_id' => 6],
            ['name' => 'Mirpur Thana', 'district_id' => 6],
            ['name' => 'Gulshan Thana', 'district_id' => 6],
            ['name' => 'Uttara Thana', 'district_id' => 6],
            ['name' => 'Pallabi Thana', 'district_id' => 6],
            ['name' => 'Cantonment Thana', 'district_id' => 6],
            ['name' => 'Dhanmondi Thana', 'district_id' => 6],
            ['name' => 'Tejgaon Thana', 'district_id' => 6],
            ['name' => 'Ramna Thana', 'district_id' => 6],
            ['name' => 'Keranigonj Upozila', 'district_id' => 6],
            ['name' => 'Dohar Upozila', 'district_id' => 6],
            ['name' => 'Nawabgonj Upozila', 'district_id' => 6],
            ['name' => 'Savar Upozila', 'district_id' => 6],
            ['name' => 'Dhamrai Upozila', 'district_id' => 6],

            // ========== Faridpur Region (District 7-11) ==========
            // Faridpur (7)
            ['name' => 'Sadar Upozila', 'district_id' => 7],
            ['name' => 'Boalmari Upozila', 'district_id' => 7],
            ['name' => 'Sadarpur Upozila', 'district_id' => 7],
            ['name' => 'Char Bhadrashon Upozila', 'district_id' => 7],
            ['name' => 'Bhanga Upozila', 'district_id' => 7],
            ['name' => 'Nagarkanda Upozila', 'district_id' => 7],
            ['name' => 'Madhukhali Upozila', 'district_id' => 7],
            ['name' => 'Alphadanga Upozila', 'district_id' => 7],
            ['name' => 'SalThanaa Upozila', 'district_id' => 7],

            // Rajbari (8)
            ['name' => 'Sadar Upozila', 'district_id' => 8],
            ['name' => 'Pangsha Upozila', 'district_id' => 8],
            ['name' => 'Goalondo Upozila', 'district_id' => 8],
            ['name' => 'Kalukhali Upozila', 'district_id' => 8],
            ['name' => 'Baliakandi Upozila', 'district_id' => 8],

            // Gopalgonj (9)
            ['name' => 'Sadar Upozila', 'district_id' => 9],
            ['name' => 'Kashiani Upozila', 'district_id' => 9],
            ['name' => 'Tongipara Upozila', 'district_id' => 9],
            ['name' => 'Muksudpur Upozila', 'district_id' => 9],
            ['name' => 'Kotalipara Upozila', 'district_id' => 9],

            // Madaripur (10)
            ['name' => 'Sadar Upozila', 'district_id' => 10],
            ['name' => 'Kalkini Upozila', 'district_id' => 10],
            ['name' => 'Rajoir Upozila', 'district_id' => 10],
            ['name' => 'Shibchar Upozila', 'district_id' => 10],

            // Shariatpur (11)
            ['name' => 'Sadar Upozila', 'district_id' => 11],
            ['name' => 'Damudda Upozila', 'district_id' => 11],
            ['name' => 'Noria Upozila', 'district_id' => 11],
            ['name' => 'Jagira Upozila', 'district_id' => 11],
            ['name' => 'Vedorgonj Upozila', 'district_id' => 11],
            ['name' => 'Goshair Hat Upozila', 'district_id' => 11],

            // ========== Barishal Region (District 12-17) ==========
            // Barguna (12)
            ['name' => 'Sadar Upozila', 'district_id' => 12],
            ['name' => 'Amtoli Upozila', 'district_id' => 12],
            ['name' => 'Betagi Upozila', 'district_id' => 12],
            ['name' => 'Taltoli Upozila', 'district_id' => 12],
            ['name' => 'Patharghata Upozila', 'district_id' => 12],
            ['name' => 'Bamna Upozila', 'district_id' => 12],

            // Bhola (13)
            ['name' => 'Sadar Upozila', 'district_id' => 13],
            ['name' => 'Daulatkhan Upozila', 'district_id' => 13],
            ['name' => 'Lalmohon Upozila', 'district_id' => 13],
            ['name' => 'Monpura Upozila', 'district_id' => 13],
            ['name' => 'Charfassion Upozila', 'district_id' => 13],
            ['name' => 'Tajumuddin Upozila', 'district_id' => 13],
            ['name' => 'Borhanuddin Upozila', 'district_id' => 13],

            // Jhalokathi (14)
            ['name' => 'Sadar Upozila', 'district_id' => 14],
            ['name' => 'Nalchiti Upozila', 'district_id' => 14],
            ['name' => 'Rajapur Upozila', 'district_id' => 14],
            ['name' => 'Kathalia Upozila', 'district_id' => 14],

            // Barishal (15)
            ['name' => 'Sadar Upozila', 'district_id' => 15],
            ['name' => 'Muladi Upozila', 'district_id' => 15],
            ['name' => 'Gournadi Upozila', 'district_id' => 15],
            ['name' => 'Agoil Jhora Upozila', 'district_id' => 15],
            ['name' => 'Hijla Upozila', 'district_id' => 15],
            ['name' => 'Ujirpur Upozila', 'district_id' => 15],
            ['name' => 'Mehedigonj Upozila', 'district_id' => 15],
            ['name' => 'Babugonj Upozila', 'district_id' => 15],
            ['name' => 'Bakergonj Upozila', 'district_id' => 15],
            ['name' => 'Banaripara Upozila', 'district_id' => 15],

            // Patuakhali (16)
            ['name' => 'Sadar Upozila', 'district_id' => 16],
            ['name' => 'Golachipa Upozila', 'district_id' => 16],
            ['name' => 'Kolapara Upozila', 'district_id' => 16],
            ['name' => 'Dosmina Upozila', 'district_id' => 16],
            ['name' => 'Bauphal Upozila', 'district_id' => 16],
            ['name' => 'Rangabali Upozila', 'district_id' => 16],
            ['name' => 'Dumki Upozila', 'district_id' => 16],

            // Pirojpur (17)
            ['name' => 'Sadar Upozila', 'district_id' => 17],
            ['name' => 'Mirjagonj Upozila', 'district_id' => 17],
            ['name' => 'Mathbaria Upozila', 'district_id' => 17],
            ['name' => 'Nazirpur Upozila', 'district_id' => 17],
            ['name' => 'Nesarabad Upozila', 'district_id' => 17],
            ['name' => 'Zianagar Upozila', 'district_id' => 17],
            ['name' => 'Kaukhali Upozila', 'district_id' => 17],
            ['name' => 'Bhandaria Upozila', 'district_id' => 17],

            // ========== Khulna Division (District 18-27) ==========
            // Khulna (18)
            ['name' => 'Sadar Thana', 'district_id' => 18],
            ['name' => 'Sonadanga Thana', 'district_id' => 18],
            ['name' => 'Daulatpur Thana', 'district_id' => 18],
            ['name' => 'Phultola Upozila', 'district_id' => 18],
            ['name' => 'Dumuria Upozila', 'district_id' => 18],
            ['name' => 'Terokhada Upozila', 'district_id' => 18],
            ['name' => 'Degholia Upozila', 'district_id' => 18],
            ['name' => 'Rupsha Upozila', 'district_id' => 18],
            ['name' => 'Batiaghata Upozila', 'district_id' => 18],
            ['name' => 'Dakop Upozila', 'district_id' => 18],
            ['name' => 'Koira Upozila', 'district_id' => 18],

            // Norail (19)
            ['name' => 'Sadar Upozila', 'district_id' => 19],
            ['name' => 'Kalia Upozila', 'district_id' => 19],
            ['name' => 'Lohagora Upozila', 'district_id' => 19],

            // Magura (20)
            ['name' => 'Sadar Upozila', 'district_id' => 20],
            ['name' => 'Sreepur Upozila', 'district_id' => 20],
            ['name' => 'Salikha Upozila', 'district_id' => 20],
            ['name' => 'Mohammadpur Upozila', 'district_id' => 20],

            // Satkhira (21)
            ['name' => 'Sadar Upozila', 'district_id' => 21],
            ['name' => 'Shyamnagar Upozila', 'district_id' => 21],
            ['name' => 'Assasuni Upozila', 'district_id' => 21],
            ['name' => 'Tala Upozila', 'district_id' => 21],
            ['name' => 'Kaligonj Upozila', 'district_id' => 21],
            ['name' => 'Kolaroa Upozila', 'district_id' => 21],
            ['name' => 'Debhata Upozila', 'district_id' => 21],

            // Bagerhat (22)
            ['name' => 'Sadar Upozila', 'district_id' => 22],
            ['name' => 'Kochua Upozila', 'district_id' => 22],
            ['name' => 'Rampal Upozila', 'district_id' => 22],
            ['name' => 'Saron Khola Upozila', 'district_id' => 22],
            ['name' => 'Morolgonj Upozila', 'district_id' => 22],
            ['name' => 'Mollarhat Upozila', 'district_id' => 22],
            ['name' => 'Chitolmari Upozila', 'district_id' => 22],
            ['name' => 'Fakirhat Upozila', 'district_id' => 22],
            ['name' => 'Mongla Upozila', 'district_id' => 22],

            // Jhenaidah (23)
            ['name' => 'Sadar Upozila', 'district_id' => 23],
            ['name' => 'Kaligonj Upozila', 'district_id' => 23],
            ['name' => 'Kot Chandpur Upozila', 'district_id' => 23],
            ['name' => 'Horina Kundu Upozila', 'district_id' => 23],
            ['name' => 'Shyola Kupa Upozila', 'district_id' => 23],
            ['name' => 'Moheshpur Upozila', 'district_id' => 23],

            // Jessore (24)
            ['name' => 'Sadar Upozila', 'district_id' => 24],
            ['name' => 'Keshobpur Upozila', 'district_id' => 24],
            ['name' => 'Jhikorgacha Upozila', 'district_id' => 24],
            ['name' => 'Monirampur Upozila', 'district_id' => 24],
            ['name' => 'Bagharpara Upozila', 'district_id' => 24],
            ['name' => 'Chowgacha Upozila', 'district_id' => 24],
            ['name' => 'Sharsha Upozila', 'district_id' => 24],
            ['name' => 'Avoynagar Upozila', 'district_id' => 24],

            // Meherpur (25)
            ['name' => 'Sadar Upozila', 'district_id' => 25],
            ['name' => 'Gangni Upozila', 'district_id' => 25],
            ['name' => 'Mujib Nagar Upozila', 'district_id' => 25],

            // Chuadanga (26)
            ['name' => 'Sadar Upozila', 'district_id' => 26],
            ['name' => 'Jibon Nagar Upozila', 'district_id' => 26],
            ['name' => 'Damur Huda Upozila', 'district_id' => 26],
            ['name' => 'Alamdanga Upozila', 'district_id' => 26],

            // Kushtia (27)
            ['name' => 'Sadar Upozila', 'district_id' => 27],
            ['name' => 'Kumarkhali Upozila', 'district_id' => 27],
            ['name' => 'Daulatpur Upozila', 'district_id' => 27],
            ['name' => 'Bheramara Upozila', 'district_id' => 27],
            ['name' => 'Khoksha Upozila', 'district_id' => 27],
            ['name' => 'Mirpur Upozila', 'district_id' => 27],

            // ========== Sylhet Division (District 28-31) ==========
            // Sylhet (28)
            ['name' => 'Sadar Upozila', 'district_id' => 28],
            ['name' => 'Gopalgonj Upozila', 'district_id' => 28],
            ['name' => 'Biwanibazar Upozila', 'district_id' => 28],
            ['name' => 'Jokigonj Upozila', 'district_id' => 28],
            ['name' => 'Companigonj Upozila', 'district_id' => 28],
            ['name' => 'Jaintapur Upozila', 'district_id' => 28],
            ['name' => 'Daxin Surma Upozila', 'district_id' => 28],
            ['name' => 'Fenchugonj Upozila', 'district_id' => 28],
            ['name' => 'Bishwanath Upozila', 'district_id' => 28],
            ['name' => 'Balagonj Upozila', 'district_id' => 28],
            ['name' => 'Gowainghat Upozila', 'district_id' => 28],
            ['name' => 'Kanaighat Upozila', 'district_id' => 28],

            // Sunamgonj (29)
            ['name' => 'Sadar Upozila', 'district_id' => 29],
            ['name' => 'Jamalgonj Upozila', 'district_id' => 29],
            ['name' => 'Jagannathpur Upozila', 'district_id' => 29],
            ['name' => 'Sulla Upozila', 'district_id' => 29],
            ['name' => 'Dharam Pasha Upozila', 'district_id' => 29],
            ['name' => 'Bishwambharpur Upozila', 'district_id' => 29],
            ['name' => 'South Sunamgonj Upozila', 'district_id' => 29],
            ['name' => 'Satok Upozila', 'district_id' => 29],
            ['name' => 'Deora Bazar Upozila', 'district_id' => 29],
            ['name' => 'Derai Upozila', 'district_id' => 29],
            ['name' => 'Tahirpur Upozila', 'district_id' => 29],

            // Moulvibazar (30)
            ['name' => 'Sadar Upozila', 'district_id' => 30],
            ['name' => 'Rajnagar Upozila', 'district_id' => 30],
            ['name' => 'Kulaura Upozila', 'district_id' => 30],
            ['name' => 'Juri Upozila', 'district_id' => 30],
            ['name' => 'Boro Lekha Upozila', 'district_id' => 30],
            ['name' => 'Komolgonj Upozila', 'district_id' => 30],
            ['name' => 'Srimangal Upozila', 'district_id' => 30],

            // Habiganj (31)
            ['name' => 'Sadar Upozila', 'district_id' => 31],
            ['name' => 'Bahubal Upozila', 'district_id' => 31],
            ['name' => 'Lakhai Upozila', 'district_id' => 31],
            ['name' => 'Nobigonj Upozila', 'district_id' => 31],
            ['name' => 'Chunarughta Upozila', 'district_id' => 31],
            ['name' => 'Madhabpur Upozila', 'district_id' => 31],
            ['name' => 'Benia Chang Upozila', 'district_id' => 31],
            ['name' => 'Ajmirigonj Upozila', 'district_id' => 31],

            // ========== Mymensingh Division (District 32-37) ==========
            // Tangail (32)
            ['name' => 'Sadar Upozila', 'district_id' => 32],
            ['name' => 'Delduar Upozila', 'district_id' => 32],
            ['name' => 'Mirjapur Upozila', 'district_id' => 32],
            ['name' => 'Bhuapur Upozila', 'district_id' => 32],
            ['name' => 'Ghatail Upozila', 'district_id' => 32],
            ['name' => 'Bashail Upozila', 'district_id' => 32],
            ['name' => 'Nagorpur Upozila', 'district_id' => 32],
            ['name' => 'Kalihati Upozila', 'district_id' => 32],
            ['name' => 'Sokhipur Upozila', 'district_id' => 32],
            ['name' => 'Gopalpur Upozila', 'district_id' => 32],
            ['name' => 'Dhanbari Upozila', 'district_id' => 32],
            ['name' => 'Madhupur Upozila', 'district_id' => 32],

            // Kishoreganj (33)
            ['name' => 'Sadar Upozila', 'district_id' => 33],
            ['name' => 'Hossainpur Upozila', 'district_id' => 33],
            ['name' => 'Karimgonj Upozila', 'district_id' => 33],
            ['name' => 'Pakundia Upozila', 'district_id' => 33],
            ['name' => 'Nikli Upozila', 'district_id' => 33],
            ['name' => 'Bajitpur Upozila', 'district_id' => 33],
            ['name' => 'Kuliarchar Upozila', 'district_id' => 33],
            ['name' => 'Bhairab Upozila', 'district_id' => 33],
            ['name' => 'Methana Moin Upozila', 'district_id' => 33],
            ['name' => 'Itna Upozila', 'district_id' => 33],
            ['name' => 'Kotiadi Upozila', 'district_id' => 33],
            ['name' => 'Osto gram Upozila', 'district_id' => 33],
            ['name' => 'Tarail Upozila', 'district_id' => 33],

            // Netrokona (34)
            ['name' => 'Sadar Upozila', 'district_id' => 34],
            ['name' => 'Atpara Upozila', 'district_id' => 34],
            ['name' => 'Barhatta Upozila', 'district_id' => 34],
            ['name' => 'Mohongonj Upozila', 'district_id' => 34],
            ['name' => 'Kalmakanda Upozila', 'district_id' => 34],
            ['name' => 'Durgapur Upozila', 'district_id' => 34],
            ['name' => 'Madan Upozila', 'district_id' => 34],
            ['name' => 'Kendua Upozila', 'district_id' => 34],
            ['name' => 'Purbodhola Upozila', 'district_id' => 34],
            ['name' => 'Khalia Juri Upozila', 'district_id' => 34],

            // Jamalpur (35)
            ['name' => 'Sadar Upozila', 'district_id' => 35],
            ['name' => 'Islampur Upozila', 'district_id' => 35],
            ['name' => 'Dewangonj Upozila', 'district_id' => 35],
            ['name' => 'Sarisha Bari Upozila', 'district_id' => 35],
            ['name' => 'Madargonj Upozila', 'district_id' => 35],
            ['name' => 'Bokshigonj Upozila', 'district_id' => 35],
            ['name' => 'Melandaha Upozila', 'district_id' => 35],

            // Sherpur (36)
            ['name' => 'Sadar Upozila', 'district_id' => 36],
            ['name' => 'Nalka Upozila', 'district_id' => 36],
            ['name' => 'Nalitabari Upozila', 'district_id' => 36],
            ['name' => 'Jhenaigati Upozila', 'district_id' => 36],
            ['name' => 'Sribordi Upozila', 'district_id' => 36],

            // Mymensingh (37)
            ['name' => 'Sadar Upozila', 'district_id' => 37],
            ['name' => 'Muktagacha Upozila', 'district_id' => 37],
            ['name' => 'Phulbaria Upozila', 'district_id' => 37],
            ['name' => 'Bhaluka Upozila', 'district_id' => 37],
            ['name' => 'Trishal Upozila', 'district_id' => 37],
            ['name' => 'Gofor gaon Upozila', 'district_id' => 37],
            ['name' => 'Nandail Upozila', 'district_id' => 37],
            ['name' => 'Ishwargonj Upozila', 'district_id' => 37],
            ['name' => 'Dhobaura Upozila', 'district_id' => 37],
            ['name' => 'Gouripur Upozila', 'district_id' => 37],
            ['name' => 'Phulpur Upozila', 'district_id' => 37],
            ['name' => 'Haluaghat Upozila', 'district_id' => 37],
            ['name' => 'Tarakanda Upozila', 'district_id' => 37],

            // ========== Comilla Division (District 38-43) ==========
            // Noakhali (38)
            ['name' => 'Sadar Upozila', 'district_id' => 38],
            ['name' => 'Begumgonj Upozila', 'district_id' => 38],
            ['name' => 'Companigonj Upozila', 'district_id' => 38],
            ['name' => 'Subornocha Upozila', 'district_id' => 38],
            ['name' => 'Sunaimuri Upozila', 'district_id' => 38],
            ['name' => 'Chatkhil Upozila', 'district_id' => 38],
            ['name' => 'Shenbagh Upozila', 'district_id' => 38],
            ['name' => 'Kabirhat Upozila', 'district_id' => 38],
            ['name' => 'Hatia Upozila', 'district_id' => 38],

            // Feni (39)
            ['name' => 'Sadar Upozila', 'district_id' => 39],
            ['name' => 'Dagon Bhuiyan Upozila', 'district_id' => 39],
            ['name' => 'Fulgazi Upozila', 'district_id' => 39],
            ['name' => 'Porshuram Upozila', 'district_id' => 39],
            ['name' => 'Sagalnaiya Upozila', 'district_id' => 39],
            ['name' => 'Sonagazi Upozila', 'district_id' => 39],

            // Lakshmipur (40)
            ['name' => 'Sadar Upozila', 'district_id' => 40],
            ['name' => 'Raipur Upozila', 'district_id' => 40],
            ['name' => 'Ramgoti Upozila', 'district_id' => 40],
            ['name' => 'Ramgonj Upozila', 'district_id' => 40],
            ['name' => 'Kamalnagar Upozila', 'district_id' => 40],

            // Chandpur (41)
            ['name' => 'Sadar Upozila', 'district_id' => 41],
            ['name' => 'Matlab South Upozila', 'district_id' => 41],
            ['name' => 'Faridgonj Upozila', 'district_id' => 41],
            ['name' => 'Hajigonj Upozila', 'district_id' => 41],
            ['name' => 'Haimchar Upozila', 'district_id' => 41],
            ['name' => 'Matlab North Upozila', 'district_id' => 41],
            ['name' => 'Kochua Upozila', 'district_id' => 41],
            ['name' => 'Shaharasti Upozila', 'district_id' => 41],

            // Brahmanbaria (42)
            ['name' => 'Sadar Upozila', 'district_id' => 42],
            ['name' => 'Sarail Upozila', 'district_id' => 42],
            ['name' => 'Kosba Upozila', 'district_id' => 42],
            ['name' => 'Bancharampur Upozila', 'district_id' => 42],
            ['name' => 'Nabinagar Upozila', 'district_id' => 42],
            ['name' => 'Bijoy Nagar Upozila', 'district_id' => 42],
            ['name' => 'Ashugonj Upozila', 'district_id' => 42],
            ['name' => 'Akhaura Upozila', 'district_id' => 42],
            ['name' => 'Nasir Nagar Upozila', 'district_id' => 42],

            // Comilla (43)
            ['name' => 'Sadar Adarsho Upozila', 'district_id' => 43],
            ['name' => 'Sadar South Upozila', 'district_id' => 43],
            ['name' => 'Brahman Para Upozila', 'district_id' => 43],
            ['name' => 'Daoud Kandi Upozila', 'district_id' => 43],
            ['name' => 'Buri Chang Upozila', 'district_id' => 43],
            ['name' => 'Choddo Gram Upozila', 'district_id' => 43],
            ['name' => 'Laksham Upozila', 'district_id' => 43],
            ['name' => 'Monohorgonj Upozila', 'district_id' => 43],
            ['name' => 'Meghna Upozila', 'district_id' => 43],
            ['name' => 'Homna Upozila', 'district_id' => 43],
            ['name' => 'Titas Upozila', 'district_id' => 43],
            ['name' => 'Nangolkot Upozila', 'district_id' => 43],
            ['name' => 'Muradnagar Upozila', 'district_id' => 43],
            ['name' => 'Barura Upozila', 'district_id' => 43],
            ['name' => 'Chandina Upozila', 'district_id' => 43],
            ['name' => 'Dabidar Upozila', 'district_id' => 43],

            // ========== Chittagong Division (District 44-48) ==========
            // Chittagong (44)
            ['name' => 'Kotwali Thana', 'district_id' => 44],
            ['name' => 'Panchlaish Thana', 'district_id' => 44],
            ['name' => 'Chandgaon Thana', 'district_id' => 44],
            ['name' => 'Bandor Thana', 'district_id' => 44],
            ['name' => 'Pahartoli Thana', 'district_id' => 44],
            ['name' => 'Double Muring Thana', 'district_id' => 44],
            ['name' => 'Anwara Upozila', 'district_id' => 44],
            ['name' => 'Putia Upozila', 'district_id' => 44],
            ['name' => 'Boalkhali Upozila', 'district_id' => 44],
            ['name' => 'Satkania Upozila', 'district_id' => 44],
            ['name' => 'Chanda Naish Upozila', 'district_id' => 44],
            ['name' => 'Bash Khali Upozila', 'district_id' => 44],
            ['name' => 'Lohagora Upozila', 'district_id' => 44],
            ['name' => 'Sandip Upozila', 'district_id' => 44],
            ['name' => 'Hathazari Upozila', 'district_id' => 44],
            ['name' => 'Mirasharai Upozila', 'district_id' => 44],
            ['name' => 'Fatik Chari Upozila', 'district_id' => 44],
            ['name' => 'Rangunia Upozila', 'district_id' => 44],
            ['name' => 'Sitakundu Upozila', 'district_id' => 44],
            ['name' => 'Raujan Upozila', 'district_id' => 44],

            // Cox's Bazar (45)
            ['name' => 'Sadar Upozila', 'district_id' => 45],
            ['name' => 'Moheshkhali Upozila', 'district_id' => 45],
            ['name' => 'Kutubdia Upozila', 'district_id' => 45],
            ['name' => 'Teknaf Upozila', 'district_id' => 45],
            ['name' => 'Ramu Upozila', 'district_id' => 45],
            ['name' => 'Ukhia Upozila', 'district_id' => 45],
            ['name' => 'Chokoria Upozila', 'district_id' => 45],
            ['name' => 'Pekua Upozila', 'district_id' => 45],

            // Khagrachari (46)
            ['name' => 'Sadar Upozila', 'district_id' => 46],
            ['name' => 'Panchari Upozila', 'district_id' => 46],
            ['name' => 'Mohalchari Upozila', 'district_id' => 46],
            ['name' => 'Dighinala Upozila', 'district_id' => 46],
            ['name' => 'Matiranga Upozila', 'district_id' => 46],
            ['name' => 'Laxmichari Upozila', 'district_id' => 46],
            ['name' => 'Manikchari Upozila', 'district_id' => 46],
            ['name' => 'Ramgarh Upozila', 'district_id' => 46],

            // Bandarban (47)
            ['name' => 'Sadar Upozila', 'district_id' => 47],
            ['name' => 'Thanaanchi Upozila', 'district_id' => 47],
            ['name' => 'Ruma Upozila', 'district_id' => 47],
            ['name' => 'Roang chari Upozila', 'district_id' => 47],
            ['name' => 'Alikadam Upozila', 'district_id' => 47],
            ['name' => 'Lama Upozila', 'district_id' => 47],
            ['name' => 'Naikhang Chari Upozila', 'district_id' => 47],

            // Rangamati (48)
            ['name' => 'Sadar Upozila', 'district_id' => 48],
            ['name' => 'Barkal Upozila', 'district_id' => 48],
            ['name' => 'Longodu Upozila', 'district_id' => 48],
            ['name' => 'Baghaichari Upozila', 'district_id' => 48],
            ['name' => 'Naniar Char Upozila', 'district_id' => 48],
            ['name' => 'Kao Khali Upozila', 'district_id' => 48],
            ['name' => 'Rajastanali Upozila', 'district_id' => 48],
            ['name' => 'Belaichari Upozila', 'district_id' => 48],
            ['name' => 'Jurachari Upozila', 'district_id' => 48],
            ['name' => 'Kaptai Upozila', 'district_id' => 48],

            // ========== Rajshahi Division (District 49-56) ==========
            // Bogra (49)
            ['name' => 'Sadar Upozila', 'district_id' => 49],
            ['name' => 'Shajahanpur Upozila', 'district_id' => 49],
            ['name' => 'Saria Kandi Upozila', 'district_id' => 49],
            ['name' => 'Shibgonj Upozila', 'district_id' => 49],
            ['name' => 'Gabtoli Upozila', 'district_id' => 49],
            ['name' => 'Dhunot Upozila', 'district_id' => 49],
            ['name' => 'Sonatola Upozila', 'district_id' => 49],
            ['name' => 'Dupchachia Upozila', 'district_id' => 49],
            ['name' => 'Adamdighi Upozila', 'district_id' => 49],
            ['name' => 'Nandigram Upozila', 'district_id' => 49],
            ['name' => 'Sherpur Upozila', 'district_id' => 49],
            ['name' => 'Kahalu Upozila', 'district_id' => 49],

            // Pabna (50)
            ['name' => 'Sadar Upozila', 'district_id' => 50],
            ['name' => 'Atghoria Upozila', 'district_id' => 50],
            ['name' => 'Ishwardi Upozila', 'district_id' => 50],
            ['name' => 'Bera Upozila', 'district_id' => 50],
            ['name' => 'Sathania Upozila', 'district_id' => 50],
            ['name' => 'Sujanagar Upozila', 'district_id' => 50],
            ['name' => 'Chatmohor Upozila', 'district_id' => 50],
            ['name' => 'Bhangura Upozila', 'district_id' => 50],
            ['name' => 'Faridpur Upozila', 'district_id' => 50],

            // Rajshahi (51)
            ['name' => 'Poba Upozila', 'district_id' => 51],
            ['name' => 'Putia Upozila', 'district_id' => 51],
            ['name' => 'Charghat Upozila', 'district_id' => 51],
            ['name' => 'Tanor Upozila', 'district_id' => 51],
            ['name' => 'Baghmara Upozila', 'district_id' => 51],
            ['name' => 'Bagha Upozila', 'district_id' => 51],
            ['name' => 'Mohonpur Upozila', 'district_id' => 51],
            ['name' => 'Godagri Upozila', 'district_id' => 51],
            ['name' => 'Durgapur Upozila', 'district_id' => 51],
            ['name' => 'Boalia Thana', 'district_id' => 51],
            ['name' => 'Rajpara Thana', 'district_id' => 51],

            // Natore (52)
            ['name' => 'Sadar Upozila', 'district_id' => 52],
            ['name' => 'Singra Upozila', 'district_id' => 52],
            ['name' => 'Bagatipara Upozila', 'district_id' => 52],
            ['name' => 'Boraigram Upozila', 'district_id' => 52],
            ['name' => 'Gurudaspur Upozila', 'district_id' => 52],
            ['name' => 'Lalpur Upozila', 'district_id' => 52],
            ['name' => 'Naldanga Upozila', 'district_id' => 52],

            // Chapai Nawabgonj (53)
            ['name' => 'Sadar Upozila', 'district_id' => 53],
            ['name' => 'Shibgonj Upozila', 'district_id' => 53],
            ['name' => 'Gomostapur Upozila', 'district_id' => 53],
            ['name' => 'Nachol Upozila', 'district_id' => 53],
            ['name' => 'Bholahat Upozila', 'district_id' => 53],

            // Naogaon (54)
            ['name' => 'Sadar Upozila', 'district_id' => 54],
            ['name' => 'Raninagar Upozila', 'district_id' => 54],
            ['name' => 'Atrai Upozila', 'district_id' => 54],
            ['name' => 'Niamatpur Upozila', 'district_id' => 54],
            ['name' => 'Porsha Upozila', 'district_id' => 54],
            ['name' => 'Sapahar Upozila', 'district_id' => 54],
            ['name' => 'Manda Upozila', 'district_id' => 54],
            ['name' => 'Dhamorhat Upozila', 'district_id' => 54],
            ['name' => 'Badalgachi Upozila', 'district_id' => 54],
            ['name' => 'Potnitola Upozila', 'district_id' => 54],
            ['name' => 'Mohadebpur Upozila', 'district_id' => 54],

            // Joypurhat (55)
            ['name' => 'Sadar Upozila', 'district_id' => 55],
            ['name' => 'Akkelpur Upozila', 'district_id' => 55],
            ['name' => 'Kalai Upozila', 'district_id' => 55],
            ['name' => 'Panch bibi Upozila', 'district_id' => 55],
            ['name' => 'Khetlal Upozila', 'district_id' => 55],

            // Sirajgonj (56)
            ['name' => 'Sadar Upozila', 'district_id' => 56],
            ['name' => 'Kamar Khand Upozila', 'district_id' => 56],
            ['name' => 'Belkuchi Upozila', 'district_id' => 56],
            ['name' => 'Kazipur Upozila', 'district_id' => 56],
            ['name' => 'Chowhali Upozila', 'district_id' => 56],
            ['name' => 'Shahadpur Upozila', 'district_id' => 56],
            ['name' => 'Tarash Upozila', 'district_id' => 56],
            ['name' => 'Ullapara Upozila', 'district_id' => 56],
            ['name' => 'Roygonj Upozila', 'district_id' => 56],

            // ========== Rangpur Division (District 57-64) ==========
            // Nilphamari (57)
            ['name' => 'Sadar Upozila', 'district_id' => 57],
            ['name' => 'Dimla Upozila', 'district_id' => 57],
            ['name' => 'Jaldhaka Upozila', 'district_id' => 57],
            ['name' => 'Domar Upozila', 'district_id' => 57],
            ['name' => 'Keshoregonj Upozila', 'district_id' => 57],
            ['name' => 'Saidpur Upozila', 'district_id' => 57],

            // Thakurgaon (58)
            ['name' => 'Sadar Upozila', 'district_id' => 58],
            ['name' => 'Baliadangi Upozila', 'district_id' => 58],
            ['name' => 'Pirgonj Upozila', 'district_id' => 58],
            ['name' => 'Horipur Upozila', 'district_id' => 58],
            ['name' => 'Ranisankail Upozila', 'district_id' => 58],

            // Gaibandha (59)
            ['name' => 'Sadar Upozila', 'district_id' => 59],
            ['name' => 'Gobindagonj Upozila', 'district_id' => 59],
            ['name' => 'Phulchari Upozila', 'district_id' => 59],
            ['name' => 'Saghat Upozila', 'district_id' => 59],
            ['name' => 'Sundargonj Upozila', 'district_id' => 59],
            ['name' => 'Palashbari Upozila', 'district_id' => 59],
            ['name' => 'Sadullapur Upozila', 'district_id' => 59],

            // Lalmonirhat (60)
            ['name' => 'Sadar Upozila', 'district_id' => 60],
            ['name' => 'Aditmari Upozila', 'district_id' => 60],
            ['name' => 'Hatibandha Upozila', 'district_id' => 60],
            ['name' => 'Kaligonj Upozila', 'district_id' => 60],
            ['name' => 'Patgram Upozila', 'district_id' => 60],

            // Kurigram (61)
            ['name' => 'Sadar Upozila', 'district_id' => 61],
            ['name' => 'Rowmari Upozila', 'district_id' => 61],
            ['name' => 'Rajibpur Upozila', 'district_id' => 61],
            ['name' => 'Chilmari Upozila', 'district_id' => 61],
            ['name' => 'Ulipur Upozila', 'district_id' => 61],
            ['name' => 'Rajarhat Upozila', 'district_id' => 61],
            ['name' => 'Phulbari Upozila', 'district_id' => 61],
            ['name' => 'Nageshwori Upozila', 'district_id' => 61],
            ['name' => 'Bhurungamari Upozila', 'district_id' => 61],

            // Dinajpur (62)
            ['name' => 'Sadar Upozila', 'district_id' => 62],
            ['name' => 'Parbotipur Upozila', 'district_id' => 62],
            ['name' => 'Phulbari Upozila', 'district_id' => 62],
            ['name' => 'Birampur Upozila', 'district_id' => 62],
            ['name' => 'Hakimpur Upozila', 'district_id' => 62],
            ['name' => 'Nawabgonj Upozila', 'district_id' => 62],
            ['name' => 'Ghoraghat Upozila', 'district_id' => 62],
            ['name' => 'Bochagonj Upozila', 'district_id' => 62],
            ['name' => 'Berol Upozila', 'district_id' => 62],
            ['name' => 'Kaharol Upozila', 'district_id' => 62],
            ['name' => 'Birgonj Upozila', 'district_id' => 62],
            ['name' => 'Khansama Upozila', 'district_id' => 62],
            ['name' => 'Chirir Bandor Upozila', 'district_id' => 62],

            // Rangpur (63)
            ['name' => 'Sadar Upozila', 'district_id' => 63],
            ['name' => 'Gongachora Upozila', 'district_id' => 63],
            ['name' => 'Badargonj Upozila', 'district_id' => 63],
            ['name' => 'Taragonj Upozila', 'district_id' => 63],
            ['name' => 'Kaunia Upozila', 'district_id' => 63],
            ['name' => 'Pirgacha Upozila', 'district_id' => 63],
            ['name' => 'Mithapukur Upozila', 'district_id' => 63],
            ['name' => 'Pirgonj Upozila', 'district_id' => 63],

            // Panchagarh (64)
            ['name' => 'Sadar Upozila', 'district_id' => 64],
            ['name' => 'Atwori Upozila', 'district_id' => 64],
            ['name' => 'Boda Upozila', 'district_id' => 64],
            ['name' => 'Debigonj Upozila', 'district_id' => 64],
            ['name' => 'Tetulia Upozila', 'district_id' => 64],
        ];

        Upazila::insert($upazilas);
    }
}
