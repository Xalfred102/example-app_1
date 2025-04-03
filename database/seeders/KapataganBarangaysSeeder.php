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
                'population' => 62571, 
                'barangays' => 33, 
                'image' => 'municipalities/kapatagan.jpg',
                'general_info' => 'Kapatagan, Lanao del Norte
Kapatagan is a municipality in Lanao del Norte, Philippines, with a population of 62,571 (2020 census). Its name comes from the Visayan word "patag," meaning plain or valley.'
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
