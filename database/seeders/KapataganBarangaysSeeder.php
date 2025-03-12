<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class KapataganBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Kapatagan Municipality
        $kapatagan = Municipality::firstOrCreate(
            ['name' => 'Kapatagan'],
            [
                'latitude' => 7.9062, 
                'longitude' => 123.7658, 
                'population' => 65000, 
                'barangays' => 33, 
                'image' => 'municipalities/kapatagan.jpg',
                'general_info' => 'Kapatagan is one of the largest municipalities in Lanao del Norte, known for its rich agricultural land and scenic spots.'
            ]
        );

        // List of Barangays for Kapatagan
        $kapataganBarangays = [
            'Bagong Badian', 'Bagong Silang', 'Balili', 'Bansarvil', 'Belis',
            'Buenavista', 'Butadon', 'Cathedral Falls', 'Concepcion', 'Curvada',
            'De Asis', 'Donggoan', 'Durano', 'Kahayagan', 'Kidalos',
            'La Libertad', 'Lapinig', 'Mahayahay', 'Malinas', 'Maranding',
            'Margos', 'Poblacion', 'Pulang Yuta', 'San Isidro', 'San Vicente',
            'Santa Cruz', 'Santo Tomas', 'Suso', 'Taguitic', 'Tiacongan',
            'Tipolo', 'Tulatulahan', 'Waterfalls'
        ];

        // Insert Barangays for Kapatagan
        foreach ($kapataganBarangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $kapatagan->id],
                ['population' => rand(1000, 7000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
