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
        DB::table('blogs')->insert([
            [
                'id' => 1,
                'title' => 'Sobre servicios de viajes en el tiempo',
                'description' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad',
                'image' => null,
                'synopsis' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'category' => 'Viajes en el tiempo'
            ],
            [
                'id' => 2,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'synopsis' => null,
                'category' => 'Viajes en el tiempo'
            ],
            [
                'id' => 3,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'synopsis' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'category' => 'Viajes en el tiempo'
            ],
            [
                'id' => 4,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'synopsis' => null,
                'category' => 'Viajes en el tiempo',
            ],
            [
                'id' => 5,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'synopsis' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'category' => 'Viajes en el tiempo'
            ],
            [
                'id' => 6,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'synopsis' => null,
                'category' => 'Viajes en el tiempo'
            ]
        ]);
    }
}
