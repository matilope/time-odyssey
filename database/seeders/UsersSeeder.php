<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'matilo',
                'email' => 'matias.lopez@davinci.edu.ar',
                'rol' => 'admin',
                'profile_picture' => 'image.jpg',
                'password' => 'password',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 2,
                'username' => 'lauti',
                'email' => 'lautaro.climent@davinci.edu.ar',
                'rol' => 'admin',
                'profile_picture' => 'image.jpg',
                'password' => 'password',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 3,
                'username' => 'santi',
                'email' => 'santiago.gallino@davinci.edu.ar',
                'rol' => 'user',
                'profile_picture' => null,
                'password' => 'password',
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
