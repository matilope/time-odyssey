<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Viajes',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Viajes en el tiempo',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Extra',
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
