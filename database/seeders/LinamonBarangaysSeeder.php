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
                'population' => 21269, 
                'barangays' => 8, 
                'image' => 'municipalities/linamon.jpg',
                'general_info' => 'Linamon, Lanao del Norte
Linamon is a municipality in Lanao del Norte, Philippines, with a population of 21,269 (2020 census). It was formerly a barangay of Iligan City before becoming a separate municipality on January 13, 1960.

History
Originally home to Bisaya settlers, Linamon saw waves of migration under the National Land Settlement Administration (1935–1944). The peaceful integration of Visayan and Luzon settlers with Maranao landowners shaped the towns diverse heritage.'
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
