<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                'country_id' => 1,
                'name' => 'Zurich',
                'slug' => 'zurich',
                'day' => 6,
                'price' => 6000000,
                'image' => 'default-image/zurich.jpg'
            ],
            [
                'country_id' => 1,
                'name' => 'Geneva',
                'slug' => 'geneva',
                'day' => 7,
                'price' => 7000000,
                'image' => 'default-image/geneva.jpg'
            ],
            [
                'country_id' => 1,
                'name' => 'Lausanne',
                'slug' => 'lausanne',
                'day' => 9,
                'price' => 9000000,
                'image' => 'default-image/lausanne.jpg'
            ],
            [
                'country_id' => 1,
                'name' => 'Bern',
                'slug' => 'bern',
                'day' => 5,
                'price' => 5000000,
                'image' => 'default-image/bern.jpg'
            ],
            [
                'country_id' => 1,
                'name' => 'Basel',
                'slug' => 'basel',
                'day' => 4,
                'price' => 4000000,
                'image' => 'default-image/basel.jpg'
            ],
        ];

        foreach ($cities as $key => $value) {
            City::create($value);
        }
    }
}
