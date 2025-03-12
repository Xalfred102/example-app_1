<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class NununganBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Nunungan Municipality
        $nunungan = Municipality::firstOrCreate(
            ['name' => 'Nunungan'],
            [
                'latitude' => 7.8500, 
                'longitude' => 123.9833, 
                'population' => 25000, 
                'barangays' => 25, 
                'image' => 'municipalities/nunungan.jpg',
                'general_info' => 'Nunungan is a municipality in Lanao del Norte, known for its rich cultural heritage and traditions.'
            ]
        );

        // List of Barangays for Nunungan
        $barangays = [
            'Abaga', 'Bangco', 'Cabasaran (Laya)', 'Canibongan', 'Dimayon',
            'Inayawan', 'Kaludan', 'Karcum', 'Katubuan', 'Liangan',
            'Lupitan', 'Malaig', 'Mangun', 'Masibay', 'Notongan',
            'Panganapan', 'Pantar', 'Paridi', 'Petadun', 'Poblacion',
            'Rarab', 'Raraban', 'Rebucon', 'Songgod', 'Taraka'
        ];

        // Insert Barangays for Nunungan
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $nunungan->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
