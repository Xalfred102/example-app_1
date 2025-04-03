<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class MaigoBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Maigo Municipality
        $maigo = Municipality::firstOrCreate(
            ['name' => 'Maigo'],
            [
                'latitude' => 8.1833, 
                'longitude' => 123.9833, 
                'population' => 23337, 
                'barangays' => 13, 
                'image' => 'municipalities/maigo.jpg',
                'general_info' => 'Maigo, Lanao del Norte
Maigo is a municipality in Lanao del Norte, Philippines, with a population of 23,337 (2020 census). Originally part of Kolambugan, it became a separate municipality in 1959 through Executive Order No. 331. The town has a rich cultural history, where Muslims and Christians live in harmony. It was also part of the National Land Settlement Program, which brought settlers from Visayas and Luzon to develop agriculture in the area.'
            ]
        );

        // List of Barangays for Maigo
        $barangays = [
            'Balagatasa', 'Camp', 'Claro M. Recto', 'Inoma', 'Labuay',
            'Liangan West', 'Mahayahay', 'Maliwanag', 'Mentring', 
            'Poblacion', 'Santa Cruz', 'Sigapod', 'Kulasihan (Villanueva)'
        ];

        // Insert Barangays for Maigo
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $maigo->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
