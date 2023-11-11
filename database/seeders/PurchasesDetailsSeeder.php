<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('purchases_details')->insert([
            [
                'id' => 1,
                'service_id' => 3,
                'purchase_id' => 1,
                'quantity' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
