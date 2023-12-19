<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('purchases')->insert([
      [
        'id' => 1,
        'user_id' => 3,
        'service_id' => 3,
        'service_name' => 'Marte',
        'price' => 3500000,
        'quantity' => 1,
        'payment_id' => 1,
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 2,
        'user_id' => 1,
        'service_id' => 8,
        'service_name' => 'Próxima Centauri b',
        'price' => 19000000,
        'quantity' => 1,
        'payment_id' => 2,
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 3,
        'user_id' => 1,
        'service_id' => 3,
        'service_name' => 'Marte',
        'price' => 3500000,
        'quantity' => 1,
        'payment_id' => 3,
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 4,
        'user_id' => 2,
        'service_id' => 6,
        'service_name' => 'Europa',
        'price' => 4000000,
        'quantity' => 1,
        'payment_id' => 4,
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 5,
        'user_id' => 3,
        'service_id' => 4,
        'service_name' => 'Luna',
        'price' => 1000000,
        'quantity' => 1,
        'payment_id' => 5,
        'updated_at' => now(),
        'created_at' => now()
      ]
    ]);
  }
}
