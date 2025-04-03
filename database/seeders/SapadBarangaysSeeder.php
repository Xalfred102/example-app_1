<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class SapadBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Sapad Municipality
        $sapad = Municipality::firstOrCreate(
            ['name' => 'Sapad'],
            [
                'latitude' => 7.8333, 
                'longitude' => 123.8500, 
                'population' => 22974, 
                'barangays' => 17, 
                'image' => 'municipalities/sapad.jpg',
                'general_info' => 'Sapad is a municipality in Lanao del Norte, Philippines, with a population of 22,974 (2020 census). It was officially created through Republic Act No. 5745, separating it from Kapatagan.
Sapad is known for its agricultural economy, with rice, corn, and coconut as major products. The town is home to a diverse mix of cultures, reflecting both Maranao and Cebuano traditions. Its natural landscapes and rivers contribute to local tourism and provide potential for eco-tourism development.'
            ]
        );

        // List of Barangays for Sapad
        $barangays = [
            'Baning', 'Poblacion Sapad (formerly Buriasan)', 'Dansalan', 'Gamal', 'Inudaran I',
            'Inudaran II', 'Karkum', 'Katipunan', 'Mabugnao', 'Maito Salug',
            'Mala Salug', 'Mama-anon', 'Mapurog', 'Pancilan', 'Panoloon',
            'Pili', 'Lower Sapad'
        ];

        // Insert Barangays for Sapad
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $sapad->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
