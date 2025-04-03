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
                'population' => 24193,
                'barangays' => 13,
                'image' => 'municipalities/kauswagan.jpg',
                'general_info' => 'Kauswagan, Lanao del Norte
Kauswagan is a municipality in Lanao del Norte, Philippines, with a population of 24,193 (2020 census). It was established as a municipality in 1948 through Executive Order No. 126, separating it from Iligan.

History
Kauswagan has a complex past, experiencing conflicts during martial law and the MILF insurgency. In March 2000, it became a focal point of the government’s all-out war against the MILF, led by Commander Bravo.

Settlement & Cultural Influence
Originally inhabited by Maranaos, the town later saw settlers from Luzon and Visayas under the National Land Settlement Administration (NLSA) during the Commonwealth era. Many locals have mixed Maranao and Visayan ancestry due to intermarriage and land exchanges.'
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
