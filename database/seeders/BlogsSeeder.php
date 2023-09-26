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
                'image' => 'https://www.edicontinente.com.ar/image/titulos/9788418703164.jpg',
                'synopsis' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => 'https://img2.rtve.es/imagenes/orbita-laika-podcast-capitulo-6-algun-dia-se-podra-viajar-tiempo/1642607202891.jpg',
                'synopsis' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => 'https://img2.rtve.es/imagenes/orbita-laika-podcast-capitulo-6-algun-dia-se-podra-viajar-tiempo/1642607202891.jpg',
                'synopsis' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => 'https://img2.rtve.es/imagenes/orbita-laika-podcast-capitulo-6-algun-dia-se-podra-viajar-tiempo/1642607202891.jpg',
                'synopsis' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => 'https://img2.rtve.es/imagenes/orbita-laika-podcast-capitulo-6-algun-dia-se-podra-viajar-tiempo/1642607202891.jpg',
                'synopsis' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => 'https://img2.rtve.es/imagenes/orbita-laika-podcast-capitulo-6-algun-dia-se-podra-viajar-tiempo/1642607202891.jpg',
                'synopsis' => null,
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
