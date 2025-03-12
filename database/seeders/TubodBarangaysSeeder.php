<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class TubodBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Tubod Municipality
        $tubod = Municipality::firstOrCreate(
            ['name' => 'Tubod'],
            [
                'latitude' => 8.0521, 
                'longitude' => 123.7895, 
                'population' => 47000, 
                'barangays' => 24, 
                'image' => 'municipalities/tubod.jpg',
                'general_info' => 'Tubod is the capital of Lanao del Norte, known as the center of government and commerce in the province.'
            ]
        );

        // List of Barangays for Tubod
        $tubodBarangays = [
            'Barakanas', 'Baris (Lumangculob)', 'Bualan', 'Bulod', 'Camp 5',
            'Candis', 'Caniogan', 'Dalama', 'Kakai Renabor', 'Kalilangan',
            'Licapao', 'Malingao', 'Palao', 'Patudan', 'Pigcarangan',
            'Pinpin (Tadura)', 'Poblacion', 'Pualas', 'San Antonio', 'Santo Niño',
            'Taden', 'Tangueguiron', 'Taguranao', 'Tubaran'
        ];

        // Insert Barangays for Tubod
        foreach ($tubodBarangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $tubod->id],
                ['population' => rand(1000, 7000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
