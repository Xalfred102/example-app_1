<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class TangcalBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Tangcal Municipality
        $tangcal = Municipality::firstOrCreate(
            ['name' => 'Tangcal'],
            [
                'latitude' => 7.9458, 
                'longitude' => 123.8234, 
                'population' => 25000, 
                'barangays' => 18, 
                'image' => 'municipalities/tangcal.jpg',
                'general_info' => 'Tangcal is a municipality in Lanao del Norte, known for its cultural heritage and rich traditions.'
            ]
        );

        // List of Barangays for Tangcal
        $tangcalBarangays = [
            'Bayabao', 'Berwar', 'Big Banisilon', 'Big Meladoc', 'Bubong',
            'Lamaosa', 'Linao', 'Lindongan', 'Lingco-an', 'Papan',
            'Pelingkingan', 'Poblacion', 'Poona Kapatagan', 'Punod',
            'Small Banisilon', 'Small Meladoc', 'Somiorang', 'Tangcal Proper'
        ];

        // Insert Barangays for Tangcal
        foreach ($tangcalBarangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $tangcal->id],
                ['population' => rand(500, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
