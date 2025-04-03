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
                'latitude' => 8.1144, 
                'longitude' => 124.2211, 
                'population' => 68465, 
                'barangays' => 21, 
                'image' => 'municipalities/baloi.jpg',
                'general_info' => 'Balo-i, Lanao del Norte
Balo-i is a municipality in Lanao del Norte, Philippines, with a population of 68,465 (2020 census). Also spelled Baloi or Balëy, it is home to Maria Cristina Airport (Iligan Airport).
History
Established on August 1, 1948, Balo-i was formed from the municipal districts of Momungan, Pantar, and Balut. It later became the mother town of Tagoloan (1969) and Pantar (1978).'
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
