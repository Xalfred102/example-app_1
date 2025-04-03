<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class SultanNagaDimaporoBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Sultan Naga Dimaporo Municipality
        $sultanNagaDimaporo = Municipality::firstOrCreate(
            ['name' => 'Sultan Naga Dimaporo'],
            [
                'latitude' => 7.6469, 
                'longitude' => 123.7472, 
                'population' => 60904, 
                'barangays' => 36, 
                'image' => 'municipalities/sultan-naga-dimaporo.jpg',
                'general_info' => 'Formerly known as Karomatan, Sultan Naga Dimaporo is a municipality in Lanao del Norte, Philippines, with a population of 60,904 (2020 census). It was established through Executive Order No. 588 (1953), incorporating barangays from Kapatagan and Malabang.
The town is a mix of Maranao and Cebuano cultures, with farming and fishing as key industries. It is known for its rich history and coastal resources, making it a potential hub for eco-tourism.'
            ]
        );

        // List of Barangays for Sultan Naga Dimaporo
        $barangays = [
            'Bangaan', 'Bangko', 'Bansarvil II', 'Bauyan', 'Cabongbongan',
            'Calibao', 'Calipapa', 'Calube', 'Campo Islam', 'Capocao',
            'Dableston', 'Dalama', 'Dangolaan', 'Ditago', 'Ilian',
            'Kauswagan', 'Kirapan', 'Koreo', 'Lantawan', 'Mabuhay',
            'Maguindanao', 'Mahayahay', 'Mamagum', 'Mina', 'Pandanan',
            'Payong', 'Piraka', 'Pikalawag', 'Pikinit', 'Poblacion',
            'Ramain', 'Rebucon', 'Sigayan', 'Sugod', 'Tagulo',
            'Tantaon', 'Topocon'
        ];

        // Insert Barangays for Sultan Naga Dimaporo
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $sultanNagaDimaporo->id],
                ['population' => rand(1000, 7000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
