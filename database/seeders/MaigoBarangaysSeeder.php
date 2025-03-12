<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class MaigoBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Maigo Municipality
        $maigo = Municipality::firstOrCreate(
            ['name' => 'Maigo'],
            [
                'latitude' => 8.1833, 
                'longitude' => 123.9833, 
                'population' => 25000, 
                'barangays' => 13, 
                'image' => 'municipalities/maigo.jpg',
                'general_info' => 'Maigo is a progressive municipality in Lanao del Norte, known for its coastal and agricultural richness.'
            ]
        );

        // List of Barangays for Maigo
        $barangays = [
            'Balagatasa', 'Camp', 'Claro M. Recto', 'Inoma', 'Labuay',
            'Liangan West', 'Mahayahay', 'Maliwanag', 'Mentring', 
            'Poblacion', 'Santa Cruz', 'Sigapod', 'Kulasihan (Villanueva)'
        ];

        // Insert Barangays for Maigo
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $maigo->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
