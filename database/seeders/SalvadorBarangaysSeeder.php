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
                'population' => 32000, 
                'barangays' => 27, 
                'image' => 'municipalities/salvador.jpg',
                'general_info' => 'Salvador is a municipality in Lanao del Norte, known for its agricultural economy and diverse barangays.'
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
