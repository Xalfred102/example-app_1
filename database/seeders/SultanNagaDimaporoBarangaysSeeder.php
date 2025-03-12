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
                'population' => 45000, 
                'barangays' => 36, 
                'image' => 'municipalities/sultan-naga-dimaporo.jpg',
                'general_info' => 'Sultan Naga Dimaporo, formerly known as Karomatan, is a municipality in Lanao del Norte with a diverse cultural heritage.'
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
