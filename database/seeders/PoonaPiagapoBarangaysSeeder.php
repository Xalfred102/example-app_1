<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class PoonaPiagapoBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Poona Piagapo Municipality
        $poonaPiagapo = Municipality::firstOrCreate(
            ['name' => 'Poona Piagapo'],
            [
                'latitude' => 8.0833, 
                'longitude' => 124.0833, 
                'population' => 25000, 
                'barangays' => 26, 
                'image' => 'municipalities/poona_piagapo.jpg',
                'general_info' => 'Poona Piagapo is a municipality in Lanao del Norte, known for its diverse barangays and agricultural land.'
            ]
        );

        // List of Barangays for Poona Piagapo
        $barangays = [
            'Alowin', 'Bubong-Dinaig', 'Cormatan', 'Daramba', 'Dinaig',
            'Cabasaran', 'Kablangan', 'Cadayonan', 'Linindingan', 'Lumbatan',
            'Lupitan', 'Madamba', 'Madaya', 'Maliwanag', 'Nunang',
            'Nunungan', 'Pantao Raya', 'Pantaon', 'Pened', 'Piangamangaan',
            'Pendolonan', 'Poblacion (Lumbacaingud)', 'Sulo', 'Tagoranao',
            'Tangclao', 'Timbangalan'
        ];

        // Insert Barangays for Poona Piagapo
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $poonaPiagapo->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
