<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class TubodBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Tubod Municipality
        $tubod = Municipality::firstOrCreate(
            ['name' => 'Tubod'],
            [
                'latitude' => 8.0521, 
                'longitude' => 123.7895, 
                'population' => 50073, 
                'barangays' => 24, 
                'image' => 'municipalities/tubod.jpg',
                'general_info' => 'Tubod is the capital of Lanao del Norte, Philippines, with a population of 60,182 (2020 census). It is home to the Panguil Bay Bridge, a 3.77 km structure connecting Tubod to Tangub City, Misamis Occidental, enhancing regional accessibility.The name Tubod means "water source" in Cebuano, referring to an ever-flowing spring in Barangay Poblacion, even during dry seasons.
Established as a municipality on October 17, 1946, under Republic Act No. 58.
Became the capital of Lanao del Norte on February 3, 1982, replacing Iligan City.
Over the years, Tubod has been led by notable mayors, shaping its development into a center of governance and progress in the province.'
            ]
        );

        // List of Barangays for Tubod
        $tubodBarangays = [
            'Barakanas', 'Baris (Lumangculob)', 'Bualan', 'Bulod', 'Camp 5',
            'Candis', 'Caniogan', 'Dalama', 'Kakai Renabor', 'Kalilangan',
            'Licapao', 'Malingao', 'Palao', 'Patudan', 'Pigcarangan',
            'Pinpin (Tadura)', 'Poblacion', 'Pualas', 'San Antonio', 'Santo Niño',
            'Taden', 'Tangueguiron', 'Taguranao', 'Tubaran'
        ];

        // Insert Barangays for Tubod
        foreach ($tubodBarangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $tubod->id],
                ['population' => rand(1000, 7000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
