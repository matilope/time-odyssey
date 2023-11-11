<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'price' => 3500000,
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
