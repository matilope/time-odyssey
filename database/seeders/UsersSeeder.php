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
                'description' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'profile_picture' => 'image.jpg'
            ],
            [
                'id' => 2,
                'username' => 'lauti',
                'email' => 'lautaro.climent@davinci.edu.ar',
                'password' => 'password',
                'description' => null,
                'profile_picture' => 'image.jpg'
            ],
            [
                'id' => 3,
                'username' => 'santi',
                'email' => 'santiago.gallino@davinci.edu.ar',
                'password' => 'password',
                'description' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'profile_picture' => null
            ],
            [
                'id' => 4,
                'username' => 'luciana',
                'email' => 'lu.ciana@davinci.edu.ar',
                'password' => 'password',
                'description' => null,
                'profile_picture' => null
            ]
        ]);
    }
}
