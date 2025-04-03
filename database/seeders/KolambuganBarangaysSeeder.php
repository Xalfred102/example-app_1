<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class KolambuganBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Kolambugan Municipality
        $kolambugan = Municipality::firstOrCreate(
            ['name' => 'Kolambugan'],
            [
                'latitude' => 8.1197, 
                'longitude' => 123.8856, 
                'population' => 28265, 
                'barangays' => 26, 
                'image' => 'municipalities/kolambugan.jpg',
                'general_info' => 'Kolambugan, Lanao del Norte
Kolambugan is a municipality in Lanao del Norte, Philippines, with a population of 28,265 (2020 census).
Etymology
The town’s name comes from “kolambog,” a tree that once grew abundantly in the area. Some barangays were previously named Migcamiguing and Maribojoc, also after local trees.'
            ]
        );

        // List of Barangays for Kolambugan
        $barangays = [
            'Austin Heights', 'Baybay', 'Bubong', 'Caromatan', 'Inudaran',
            'Kulasihan', 'Libertad', 'Lumbac', 'Manga', 'Matampay',
            'Mukas', 'Muntay', 'Pagalungan', 'Palao', 'Pantaon',
            'Pantar', 'Poblacion', 'Rebucon', 'Riverside', 'San Roque',
            'Santo Niño', 'Simbuco', 'Small Banisilon', 'Sucodan', 'Tabigue',
            'Titunod'
        ];

        // Insert Barangays for Kolambugan
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $kolambugan->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
