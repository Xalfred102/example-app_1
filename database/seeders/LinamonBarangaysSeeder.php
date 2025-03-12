<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class LinamonBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Linamon Municipality
        $linamon = Municipality::firstOrCreate(
            ['name' => 'Linamon'],
            [
                'latitude' => 8.1833, 
                'longitude' => 124.0833, 
                'population' => 15000, 
                'barangays' => 8, 
                'image' => 'municipalities/linamon.jpg',
                'general_info' => 'Linamon is a coastal municipality in Lanao del Norte, known as the "Gateway to Lanao del Norte".'
            ]
        );

        // List of Barangays for Linamon
        $barangays = [
            'Busque', 'Larapan', 'Magoong', 'Napo', 'Poblacion',
            'Purakan', 'Robocon', 'Samburon'
        ];

        // Insert Barangays for Linamon
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $linamon->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
