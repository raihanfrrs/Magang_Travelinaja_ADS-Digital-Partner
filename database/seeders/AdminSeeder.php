<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'user_id' => 1,
                'name' => 'Raihan Farras',
                'slug' => 'raihan-farras',
                'email' => 'rehanfarras76@gmail.com',
                'phone' => '0812358265868'
            ]
        ];

        foreach ($admins as $key => $value) {
            Admin::create($value);
        }
    }
}
