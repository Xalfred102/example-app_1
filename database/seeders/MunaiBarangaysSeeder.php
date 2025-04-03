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
                'population' => 35020, 
                'barangays' => 26, 
                'image' => 'municipalities/munai.jpg',
                'general_info' => 'Munai, Lanao del Norte
Munai, home to 35,020 people (2020 census), is a predominantly Maranao town known as the foundation of the Four Federated Sultanates of Lanao. Established on August 17, 1917, it became part of Lanao del Norte in 1970. Located 18 km from the national highway, it is a fourth-class municipality where farming is the primary livelihood, producing copra, corn, and rice. Munai also has untapped tourism potential, with natural wonders like the Ledupa River, which flows 100 meters underground, and the Omnang Spring, known for its crystal-clear water.'
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
