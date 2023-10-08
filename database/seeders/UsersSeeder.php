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
                'password' => 'password',
                'rol' => 'admin',
                'profile_picture' => 'image.jpg',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 2,
                'username' => 'lauti',
                'email' => 'lautaro.climent@davinci.edu.ar',
                'password' => 'password',
                'rol' => 'admin',
                'profile_picture' => 'image.jpg',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 3,
                'username' => 'santi',
                'email' => 'santiago.gallino@davinci.edu.ar',
                'password' => 'password',
                'rol' => 'user',
                'profile_picture' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 4,
                'username' => 'luciana',
                'email' => 'luciana@gmail.com',
                'password' => 'password',
                'rol' => 'user',
                'profile_picture' => null,
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
