<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class BaroyBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Baroy Municipality
        $baroy = Municipality::firstOrCreate(
            ['name' => 'Baroy'],
            [
                'latitude' => 7.9678, 
                'longitude' => 123.7795, 
                'population' => 50000, 
                'barangays' => 22, 
                'image' => 'municipalities/baroy.jpg',
                'general_info' => 'Baroy is a municipality in Lanao del Norte with a rich history and vibrant culture.'
            ]
        );

        // List of Barangays for Baroy
        $baroyBarangays = [
            'Andil', 'Bagong Dawis', 'Baroy Daku', 'Bato', 'Cabasagan',
            'Dalama', 'Libertad', 'Limwag', 'Lindongan', 'Maliwanag',
            'Manan-ao', 'Pange', 'Pindolonan', 'Poblacion', 'Princesa',
            'Rawan Point', 'Riverside', 'Sagadan (Sagadan Lower)',
            'Salong', 'Tinubdan', 'Sagadan Upper', 'San Juan', 'Village'
        ];

        // Insert Barangays for Baroy
        foreach ($baroyBarangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $baroy->id],
                ['population' => rand(1000, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
