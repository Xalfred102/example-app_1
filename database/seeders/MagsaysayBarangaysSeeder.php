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
                'population' => 20463, 
                'barangays' => 24, 
                'image' => 'municipalities/magsaysay.jpg',
                'general_info' => 'Magsaysay, Lanao del Norte
Magsaysay is a municipality in Lanao del Norte, Philippines, with a population of 20,463 (2020 census). It was officially established as a municipality on March 22, 1960, through Executive Order No. 389.'
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
