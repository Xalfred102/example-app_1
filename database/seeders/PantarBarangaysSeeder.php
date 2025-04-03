<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class PantarBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Pantar Municipality
        $pantar = Municipality::firstOrCreate(
            ['name' => 'Pantar'],
            [
                'latitude' => 8.1167, 
                'longitude' => 124.2000, 
                'population' => 26599, 
                'barangays' => 21, 
                'image' => 'municipalities/pantar.jpg',
                'general_info' => 'Pantar, Lanao del Norte
Pantar is a municipality in Lanao del Norte with a population of 26,599 (2020 census). It was established on June 11, 1978, after being separated from Balo-i under Presidential Decree No. 1551. Predominantly Maranao, the town is known for its rich cultural heritage and agricultural economy.'
            ]
        );

        // List of Barangays for Pantar
        $barangays = [
            'Bangcal', 'Bubong Madaya', 'Bowi', 'Cabasaran', 'Cadayonan',
            'Campong', 'Dibarosan', 'Kalanganan East', 'Kalanganan Lower', 'Kalilangan',
            'Lumba-Punod', 'Pantao-Marug', 'Pantao-Ranao', 'Pantar East', 'Pitubo',
            'Poblacion', 'Poona-Punod', 'Punod', 'Sundiga-Punod', 'Tawanan', 'West Pantar'
        ];

        // Insert Barangays for Pantar
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $pantar->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
