<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class MunaiBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Munai Municipality
        $munai = Municipality::firstOrCreate(
            ['name' => 'Munai'],
            [
                'latitude' => 7.9850, 
                'longitude' => 123.8925, 
                'population' => 32000, 
                'barangays' => 26, 
                'image' => 'municipalities/munai.jpg',
                'general_info' => 'Munai is a municipality in Lanao del Norte, known for its rich Maranao culture and scenic landscapes.'
            ]
        );

        // List of Barangays for Munai
        $barangays = [
            'Bacayawan', 'Balabacun', 'Balintad', 'Kadayonan', 'Dalama',
            'Lindongan', 'Lingco-an', 'Lininding', 'Lumba-Bayabao', 'Madaya',
            'Maganding', 'Matampay', 'Old Poblacion', 'North Cadulawan', 'Panggao',
            'Pantao', 'Pantao-A-Munai', 'Pantaon', 'Pindolonan', 'Punong',
            'Ramain', 'Sundiga-Munai', 'Tagoranao', 'Tambo (Town Proper)', 
            'Tamparan (Mandaya)', 'Taporog'
        ];

        // Insert Barangays for Munai
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $munai->id],
                ['population' => rand(800, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
