<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            [
                'id' => 1,
                'name' => 'Mercurio',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Venus',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Marte',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Luna',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Ceres',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Europa',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'Titan',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'Próxima Centauri b',
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
