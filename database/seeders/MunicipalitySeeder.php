<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitySeeder extends Seeder {
    public function run(): void {
        $municipalities = [
            ['Bacolod', 8.1903, 124.0203, 24367, 16, 'Bacolod is a coastal municipality in Lanao del Norte.'],
            ['Baloi', 8.1144, 124.2211, 68465, 21, 'Baloi is known for its vibrant trade and commerce.'],
            ['Baroy', 8.0256, 123.7789, 24683, 23, 'Baroy has a mix of rural and urban communities.'],
            ['Iligan City', 8.2286, 124.2381, 363115, 44, 'Iligan City is known as the City of Majestic Waterfalls.'],
            ['Kapatagan', 7.8983, 123.7697, 62571, 33, 'Kapatagan is a major agricultural center in the province.'],
            ['Kauswagan', 8.1914, 124.0881, 24193, 13, 'Kauswagan has a rich historical significance.'],
            ['Kolambugan', 8.1122, 123.8958, 28265, 26, 'Kolambugan is known for its scenic coastal areas.'],
            ['Lala', 7.9731, 123.7475, 73425, 27, 'Lala is one of the largest rice-producing municipalities.'],
            ['Linamon', 8.1839, 124.1617, 21269, 8, 'Linamon is the gateway to Lanao del Norte.'],
            ['Magsaysay', 8.0356, 123.9136, 20463, 24, 'Magsaysay is a peaceful and progressive town.'],
            ['Maigo', 8.1592, 123.9589, 23337, 13, 'Maigo is known for its rich coconut industry.'],
            ['Matungao', 8.1333, 124.1664, 14756, 12, 'Matungao has a strong cultural and heritage presence.'],
            ['Munai', 7.9858, 124.0522, 35020, 26, 'Munai is a landlocked municipality in Lanao del Norte.'],
            ['Nunungan', 7.8108, 123.9442, 18827, 25, 'Nunungan is home to the largest lake in the province.'],
            ['Pantao Ragat', 8.0600, 124.1822, 30247, 20, 'Pantao Ragat is a historic municipality with deep traditions.'],
            ['Pantar', 8.0644, 124.2631, 26599, 21, 'Pantar is a small but culturally rich municipality.'],
            ['Poona Piagapo', 8.0828, 124.1408, 29183, 26, 'Poona Piagapo is home to diverse ethnic communities.'],
            ['Salvador', 7.9028, 123.8411, 32115, 25, 'Salvador is an agricultural town in Lanao del Norte.'],
            ['Sapad', 7.8453, 123.8370, 22974, 17, 'Sapad is known for its vast agricultural lands.'],
            ['Sultan Naga Dimaporo', 7.7950, 123.7153, 60904, 37, 'SND is a major fishing and farming hub.'],
            ['Tagoloan', 8.1270, 124.2758, 15091, 7, 'Tagoloan has a strong cultural heritage.'],
            ['Tangcal', 7.9964, 123.9972, 16075, 18, 'Tangcal is home to beautiful landscapes and mountains.'],
            ['Tubod', 8.0533, 123.7917, 50073, 24, 'Tubod is the capital of Lanao del Norte.']
        ];

        foreach ($municipalities as $mun) {
            Municipality::create([
                'name' => $mun[0],
                'latitude' => $mun[1],
                'longitude' => $mun[2],
                'population' => $mun[3],
                'barangays' => $mun[4],
                'general_info' => $mun[5] // Fixed syntax and added data
            ]);
        }
    }
}
