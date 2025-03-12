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
                'population' => 20000, 
                'barangays' => 7, 
                'image' => 'municipalities/tagoloan.jpg',
                'general_info' => 'Tagoloan is a municipality in Lanao del Norte known for its rich cultural heritage and historical significance.'
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
