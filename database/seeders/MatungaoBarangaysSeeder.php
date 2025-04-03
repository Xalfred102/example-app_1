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
                'population' => 14756, 
                'barangays' => 12, 
                'image' => 'municipalities/matungao.jpg',
                'general_info' => 'Matungao, Lanao del Norte
Matungao is the least populated municipality in Lanao del Norte, with 14,756 residents (2020 census). Its name means "cold" in Maranao. Known as a center of peace between Muslims and Christians, the town actively promotes Maranao culture, highlighted by the Kapagtota Festival, featuring traditional courtship dances. Established in 1949 through Executive Order No. 230, Matungao was originally part of Pantao-Ragat.'
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
