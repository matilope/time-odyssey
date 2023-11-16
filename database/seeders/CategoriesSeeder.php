<?php

namespace Database\Seeders;

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
        'name' => 'Naves',
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 3,
        'name' => 'Galaxias',
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 4,
        'name' => 'Agujeros negros',
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 5,
        'name' => 'Estrellas',
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 6,
        'name' => 'Planetas',
        'updated_at' => now(),
        'created_at' => now()
      ]
    ]);
  }
}
