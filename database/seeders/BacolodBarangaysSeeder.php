<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class BacolodBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Bacolod Municipality
        $bacolod = Municipality::firstOrCreate(
            ['name' => 'Bacolod'],
            [
                'latitude' => 8.2000, // Sample latitude
                'longitude' => 124.0833, // Sample longitude
                'population' => 32_576, // Example population
                'barangays' => 16,
                'image' => 'municipalities/bacolod.jpg',
                'general_info' => 'Bacolod is a municipality in Lanao del Norte known for its vibrant local culture and agriculture.'
            ]
        );

        // List of Barangays for Bacolod
        $barangays = [
            'Alegria', 'Babalaya', 'Babalayan Townsite', 'Binuni', 'Demologan',
            'Dimarao', 'Esperanza', 'Kahayag', 'Liangan East', 'Punod',
            'Mati', 'Minaulon', 'Pagayawan', 'Poblacion Bacolod', 'Rupagan',
            'Delabayan West'
        ];

        // Insert Barangays
        foreach ($barangays as $barangay) {
            Barangay::updateOrCreate(
                [
                    'name' => $barangay,
                    'municipality_id' => $bacolod->id
                ],
                [
                    'population' => rand(1000, 5000), // Random sample population
                    'image' => 'barangays/default.jpg' // Default image
                ]
            );
        }
    }
}
