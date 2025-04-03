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
                'population' => 29183, 
                'barangays' => 26, 
                'image' => 'municipalities/poona_piagapo.jpg',
                'general_info' => 'Poona Piagapo is a municipality in Lanao del Norte, Philippines, with a population of 29,183 (2020 census). It was established on March 31, 1976, under Presidential Decree No. 916, by merging barangays from Pantao Ragat and Matungao.
The town is predominantly Maranao, preserving rich traditions and Islamic heritage. Poona Piagapo is known for its scenic landscapes, rivers, and agricultural lands, contributing to the local economy.'
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
