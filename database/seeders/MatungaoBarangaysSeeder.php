<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class MatungaoBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Matungao Municipality
        $matungao = Municipality::firstOrCreate(
            ['name' => 'Matungao'],
            [
                'latitude' => 8.0167, 
                'longitude' => 124.0000, 
                'population' => 15000, 
                'barangays' => 12, 
                'image' => 'municipalities/matungao.jpg',
                'general_info' => 'Matungao is a peaceful municipality in Lanao del Norte, home to diverse cultures and traditions.'
            ]
        );

        // List of Barangays for Matungao
        $barangays = [
            'Bubong Radapan', 'Bangco', 'Batal', 'Batangan', 'Cadayonan',
            'Matampay', 'Pangi', 'Pasayanon', 'Poblacion (Matungao)', 
            'Puntod', 'Santa Cruz', 'Somiorang'
        ];

        // Insert Barangays for Matungao
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $matungao->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
