<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Land;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($a = 1; $a < 12; $a++) {
            Land::create([
                'id' => $a,
                'user_id' => rand(1, 4),
                'geo_id' => $a,
                'price' => rand(1500, 3000),
                'name' => fake()->firstNameFemale(),
                'picture' => 'img/buildings/winter/classic.png',
            ]);
        }
        
    }
}
