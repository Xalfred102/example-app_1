<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class TagoloanBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Tagoloan Municipality
        $tagoloan = Municipality::firstOrCreate(
            ['name' => 'Tagoloan'],
            [
                'latitude' => 8.5438, 
                'longitude' => 124.3220, 
                'population' => 15091, 
                'barangays' => 7, 
                'image' => 'municipalities/tagoloan.jpg',
                'general_info' => 'Tagoloan is a municipality in Lanao del Norte, Philippines, with a population of 15,091 (2020 census). Established through Republic Act 5822 (1969), it was formed from several barangays previously part of Baloi. The towns seat of government is in Barangay Darimbang.
Tagoloan is a small but vibrant community rich in Maranao culture and traditions. The local economy is driven by farming, trade, and small-scale industries, with potential for eco-tourism due to its natural landscapes.'
            ]
        );

        // List of Barangays for Tagoloan
        $tagoloanBarangays = [
            'Dalamas', 'Darimbang', 'Dimayon', 'Inagongan', 
            'Kiazar (Poblacion)', 'Malimbato', 'Panalawan'
        ];

        // Insert Barangays for Tagoloan
        foreach ($tagoloanBarangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $tagoloan->id],
                ['population' => rand(500, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
