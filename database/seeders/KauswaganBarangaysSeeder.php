<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class KauswaganBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Kauswagan Municipality
        $kauswagan = Municipality::firstOrCreate(
            ['name' => 'Kauswagan'],
            [
                'latitude' => 8.1833,
                'longitude' => 124.1167,
                'population' => 39_261,
                'barangays' => 13,
                'image' => 'municipalities/kauswagan.jpg',
                'general_info' => 'Kauswagan is a coastal municipality known for its history and natural beauty.'
            ]
        );

        // List of Barangays for Kauswagan
        $barangays = [
            'Bagumbayan', 'Bara-ason', 'Cayontor', 'Delabayan', 'Inudaran',
            'Kawit Occidental', 'Kawit Oriental', 'Libertad', 'Paiton', 'Poblacion',
            'Tacub', 'Tingintingin', 'Tugar'
        ];

        // Insert Barangays
        foreach ($barangays as $barangay) {
            Barangay::updateOrCreate(
                [
                    'name' => $barangay,
                    'municipality_id' => $kauswagan->id
                ],
                [
                    'population' => rand(1000, 5000), // Random population for example
                    'image' => 'barangays/default.jpg' // Default image
                ]
            );
        }
    }
}
