<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitySeeder extends Seeder {
    public function run(): void {
        $municipalities = [
            ['Bacolod', 8.1903, 124.0203, 24367, 16],
            ['Baloi', 8.1144, 124.2211, 68465, 21],
            ['Baroy', 8.0256, 123.7789, 24683, 23],
            ['Iligan City', 8.2286, 124.2381, 363115, 44],
            ['Kapatagan', 7.8983, 123.7697, 62571, 33],
            ['Kauswagan', 8.1914, 124.0881, 24193, 13],
            ['Kolambugan', 8.1122, 123.8958, 28265, 26],
            ['Lala', 7.9731, 123.7475, 73425, 27],
            ['Linamon', 8.1839, 124.1617, 21269, 8],
            ['Magsaysay', 8.0356, 123.9136, 20463, 24],
            ['Maigo', 8.1592, 123.9589, 23337, 13],
            ['Matungao', 8.1333, 124.1664, 14756, 12],
            ['Munai', 7.9858, 124.0522, 35020, 26],
            ['Nunungan', 7.8108, 123.9442, 18827, 25],
            ['Pantao Ragat', 8.0600, 124.1822, 30247, 20],
            ['Pantar', 8.0644, 124.2631, 26599, 21],
            ['Poona Piagapo', 8.0828, 124.1408, 29183, 26],
            ['Salvador', 7.9028, 123.8411, 32115, 25],
            ['Sapad', 7.8453, 123.8370, 22974, 17],
            ['Sultan Naga Dimaporo', 7.7950, 123.7153, 60904, 37],
            ['Tagoloan', 8.1270, 124.2758, 15091, 7],
            ['Tangcal', 7.9964, 123.9972, 16075, 18],
            ['Tubod', 8.0533, 123.7917, 50073, 24]
        ];

        foreach ($municipalities as $mun) {
            Municipality::create([
                'name' => $mun[0],
                'latitude' => $mun[1],
                'longitude' => $mun[2],
                'population' => $mun[3],
                'barangays' => $mun[4]
            ]);
        }
    }
}
