<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
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
                'description' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'profile_picture' => 'image.jpg',
                'date_of_birth' => date("Y-m-d"),
                'created_at' => now()
            ]
        ]);
    }
}
