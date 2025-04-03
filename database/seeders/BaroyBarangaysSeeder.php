<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class BaroyBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find or create Baroy Municipality
        $baroy = Municipality::firstOrCreate(
            ['name' => 'Baroy'],
            [
                'latitude' => 7.9678, 
                'longitude' => 123.7795, 
                'population' => 24683, 
                'barangays' => 22, 
                'image' => 'municipalities/baroy.jpg',
                'general_info' => 'Baroy, Lanao del Norte
Baroy is a municipality in Lanao del Norte, Philippines, with a population of 24,683 (2020 census). It was originally called Baloy, named after a plant used for mat weaving.
History
Once a barrio of Kolambugan, Baroy became part of Tubod in 1946 before gaining independence as a municipality on June 10, 1949 (Executive Order No. 222). Salvador was later separated from Baroy in 1960.
Festival
Baroy celebrates the Lechon Festival every June 10.'
            ]
        );

        // List of Barangays for Baroy
        $baroyBarangays = [
            'Andil', 'Bagong Dawis', 'Baroy Daku', 'Bato', 'Cabasagan',
            'Dalama', 'Libertad', 'Limwag', 'Lindongan', 'Maliwanag',
            'Manan-ao', 'Pange', 'Pindolonan', 'Poblacion', 'Princesa',
            'Rawan Point', 'Riverside', 'Sagadan (Sagadan Lower)',
            'Salong', 'Tinubdan', 'Sagadan Upper', 'San Juan', 'Village'
        ];

        // Insert Barangays for Baroy
        foreach ($baroyBarangays as $barangayName) {
            Barangay::updateOrCreate(
                ['name' => $barangayName, 'municipality_id' => $baroy->id],
                ['population' => rand(1000, 5000), 'image' => 'barangays/default.jpg']
            );
        }
    }
}
