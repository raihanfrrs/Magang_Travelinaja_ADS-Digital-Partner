<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'name' => 'Switzerland',
                'slug' => 'switzerland',
                'continent' => 'Europe',
                'population' => 90.2,
                'territory' => 202.2,
                'avg_price' => 6200000,
                'description' => 'Switzerland, federated country of central Europe. Switzerland’s administrative capital is Bern, while Lausanne serves as its judicial centre. Switzerland’s small size—its total area is about half that of Scotland—and its modest population give little indication of its international significance.',
                'image' => 'default-image/switzerland.jpeg'
            ]
        ];

        foreach ($countries as $key => $value) {
            Country::create($value);
        }
    }
}
