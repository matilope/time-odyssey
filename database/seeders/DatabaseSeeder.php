<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

    $this->call(CategoriesSeeder::class);
    $this->call(BlogsSeeder::class);
    $this->call(UsersSeeder::class);
    $this->call(DestinationsSeeder::class);
    $this->call(ServicesSeeder::class);
    $this->call(PurchasesSeeder::class);
  }
}
