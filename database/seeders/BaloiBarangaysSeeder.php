<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class BaloiBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Balo-i Municipality
        $baloi = Municipality::firstOrCreate(
            ['name' => 'Balo-i'],
            [
                'latitude' => 8.1667, 
                'longitude' => 124.1667, 
                'population' => 60_000, 
                'barangays' => 21, 
                'image' => 'municipalities/baloi.jpg',
                'general_info' => 'Balo-i is a municipality in Lanao del Norte known for its cultural heritage and trade activities.'
            ]
        );

        // List of Barangays for Balo-i
        $barangays = [
            'Abaga', 'Adapun-Ali', 'Angandog', 'Angayen', 'Bangko',
            'Batolacongan', 'Buenavista', 'Cadayonan', 'Landa', 'Lumbac',
            'Mamaanun', 'Maria-Cristina', 'Matampay', 'Nangka', 'Pacalundo',
            'Poblacion East', 'Poblacion West', 'Sandor', 'Sangcad', 
            'Sarip-Alawi', 'Sigayan'
        ];

        // Insert Barangays for Balo-i
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $baloi->id],
                ['population' => rand(800, 7000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
