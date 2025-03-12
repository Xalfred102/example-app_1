<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class PantaoRagatBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Pantao Ragat Municipality
        $pantaoRagat = Municipality::firstOrCreate(
            ['name' => 'Pantao Ragat'],
            [
                'latitude' => 8.0667, 
                'longitude' => 124.1333, 
                'population' => 25000, 
                'barangays' => 20, 
                'image' => 'municipalities/pantao_ragat.jpg',
                'general_info' => 'Pantao Ragat is a municipality in Lanao del Norte, known for its cultural heritage and history.'
            ]
        );

        // List of Barangays for Pantao Ragat
        $barangays = [
            'Aloon', 'Banday', 'Bubong Pantao Ragat', 'Bobonga Radapan', 'Cabasagan',
            'Calawe', 'Culubun', 'Dilimbayan', 'Dimayon', 'Lomidong',
            'Madaya', 'Maliwanag', 'Matampay', 'Natangcopan', 'Pansor',
            'Pantao Marug', 'Poblacion East', 'Poblacion West', 'Tangcal', 'Tongcopan'
        ];

        // Insert Barangays for Pantao Ragat
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $pantaoRagat->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
