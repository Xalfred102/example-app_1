<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;
use App\Models\Barangay;

class LalaBarangaysSeeder extends Seeder
{
    public function run()
    {
        // Find Lala Municipality
        $lala = Municipality::where('name', 'Lala')->first();

        if (!$lala) {
            // Create Lala Municipality if not exists
            $lala = Municipality::create([
                'name' => 'Lala',
                'latitude' => 7.9731,
                'longitude' => 123.7475,
                'population' => 73425,
                'barangays' => 27,
                'image' => 'municipalities/lala.jpg',
                'general_info' => 'Lala was created from Tubod through Executive Order No. 208 signed by President Elpidio Quirino on March 22, 1949.'
            ]);
        }

        // List of Barangays for Lala
        $barangays = [
            'Abaga', 'Andil', 'Cabasagan', 'Camalan', 'Darumawang Bucana', 
            'Darumawang Ilaya', 'El Salvador', 'Gumagamot', 'Lala Proper', 
            'Lanipao', 'Magpatao', 'Maranding', 'Matampay Bucana', 
            'Matampay Ilaya', 'Pacita', 'Pendolonan', 'Pinoyak', 
            'Raw-an', 'Rebe', 'San Isidro Lower', 'San Isidro Upper', 
            'San Manuel', 'Santa Cruz Lower', 'Santa Cruz Upper', 
            'Simpak', 'Tenazas', 'Tuna-an'
        ];

        // Create or update Barangays for Lala
        foreach ($barangays as $barangayName) {
            Barangay::updateOrCreate(
                [
                    'name' => $barangayName,
                    'municipality_id' => $lala->id
                ],
                [
                    'population' => rand(1000, 5000), // Random population for example
                    'image' => 'barangays/default.jpg' // Default image
                ]
            );
        }
    }
}