<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class SalvadorBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Salvador Municipality
        $salvador = Municipality::firstOrCreate(
            ['name' => 'Salvador'],
            [
                'latitude' => 7.8833, 
                'longitude' => 123.8333, 
                'population' => 32115, 
                'barangays' => 27, 
                'image' => 'municipalities/salvador.jpg',
                'general_info' => 'Salvador is a municipality in Lanao del Norte, Philippines, with a population of 32,115 (2020 census). It was established on January 13, 1960, through Executive Order No. 370, signed by President Carlos P. Garcia, after being separated from Baroy.
Salvador is home to a diverse community of Maranaos and Cebuanos, fostering a mix of Islamic and Christian traditions. The town thrives in agriculture, with rice, corn, and coconut as key products. It also features natural attractions and scenic landscapes that contribute to local tourism.'
            ]
        );

        // List of Barangays for Salvador
        $barangays = [
            'Barandia', 'Bulacon', 'Buntong', 'Calimodan', 'Camp Alere',
            'Camp III', 'Curva-Miagao', 'Daligdigan', 'Inasagan', 'Kilala',
            'Mabatao', 'Madaya', 'Mamaanon', 'Makaupaw', 'Mapantao',
            'Mindalano', 'Padianan', 'Pagalongan', 'Pagayawan', 'Panaliwad-on',
            'Pangantapan', 'Pansur', 'Patidon', 'Pawak', 'Poblacion',
            'Saumay', 'Sudlon'
        ];

        // Insert Barangays for Salvador
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $salvador->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
