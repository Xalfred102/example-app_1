<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class MagsaysayBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Magsaysay Municipality
        $magsaysay = Municipality::firstOrCreate(
            ['name' => 'Magsaysay'],
            [
                'latitude' => 8.0000, 
                'longitude' => 123.9500, 
                'population' => 20000, 
                'barangays' => 24, 
                'image' => 'municipalities/magsaysay.jpg',
                'general_info' => 'Magsaysay is a municipality in Lanao del Norte, known for its agricultural lands and cultural heritage.'
            ]
        );

        // List of Barangays for Magsaysay
        $barangays = [
            'Babasalon', 'Baguiguicon', 'Daan Campo', 'Durianon', 'Ilihan',
            'Lamigadato', 'Lemoncret', 'Lubo', 'Lumbac', 'Malabaogan',
            'Mapantao', 'Olango', 'Pangao', 'Pelingkingan', 'Lower Caningag (Perimbangan)',
            'Poblacion (Bago-A-Ingud)', 'Rarab', 'Somiorang', 'Upper Caningag (Taguitingan)',
            'Talambo', 'Tambacon', 'Tawinian', 'Tipaan', 'Tombador'
        ];

        // Insert Barangays for Magsaysay
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $magsaysay->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
