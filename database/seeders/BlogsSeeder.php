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
                'title' => 'Viajar a Marte',
                'description' => 'Marte se encuentre entre 54.9 millones y 401 millones de kilometros de distancia de la tierra.',
                'image' => null,
                'category_id' => 1,
                'synopsis' => 'En un mundo donde la exploración del espacio se ha convertido en una realidad cotidiana, imagina un viaje emocionante y audaz: un viaje a Marte. Desde la Tierra, te embarcarás en un viaje interplanetario que te llevará a través de vastos océanos estelares, desafiando las barreras de la distancia en un abrir y cerrar de ojos gracias a los revolucionarios avances en la tecnología de cohetes.

                A bordo de una nave espacial de última generación, experimentarás un nivel de comodidad y lujo que redefine la idea de viajar. Imagina una nave espacial que cuenta con suites espaciosas, ventanas panorámicas que ofrecen vistas impresionantes del espacio exterior y áreas de recreación donde podrás socializar con otros aventureros interplanetarios.
                
                El viaje en sí es una experiencia asombrosa. Gracias a la super velocidad de este nuevo cohete, lo que solía ser un viaje de varios meses ahora se reduce a tan solo tres emocionantes meses. Durante el viaje, tendrás la oportunidad de observar de cerca las maravillas del espacio, desde nebulosas distantes hasta sistemas solares lejanos.
                
                Una vez que llegues a Marte, serás testigo de paisajes deslumbrantes que desafían la imaginación. Explorarás el Valles Marineris, una profunda y vasta grieta en la superficie del planeta, que se extiende a lo largo de miles de kilómetros y ofrece vistas panorámicas que te dejarán sin aliento. También podrás visitar el Polo Norte de Marte, donde el hielo y la nieve se extienden tan lejos como alcanza la vista.
                
                La exploración de Marte es una experiencia que te sumergirá en un mundo completamente diferente al de la Tierra. Experimentarás la gravedad marciana, la cual es aproximadamente un tercio de la gravedad terrestre, lo que te permitirá saltar más alto y sentirte más ligero. Imagina caminar por la superficie del planeta rojo, con tu traje espacial avanzado proporcionándote protección y comodidad en este entorno desafiante.
                
                A medida que te aventures en la exploración de este mundo fascinante, podrás descubrir los secretos de su geología y su historia. Marte, con sus cráteres antiguos y su terreno variado, alberga pistas importantes sobre el pasado de nuestro sistema solar y la posibilidad de vida en otros planetas.
                
                Este viaje a Marte es más que una aventura; es una ventana al futuro de la exploración espacial y la posibilidad de que la humanidad se convierta en una especie interplanetaria. En un mundo donde la tecnología y la ambición han llevado a la realización de sueños antes inimaginables, el viaje a Marte es una realidad que está más cerca de lo que podríamos haber imaginado.
                
                Así que prepárate para despegar y sumergirte en esta emocionante odisea interplanetaria. El viaje a Marte te espera, y el futuro está lleno de posibilidades infinitas en el vasto universo que nos rodea. ¡Bienvenidos al futuro de los viajes espaciales!',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Podcast de viajes en el tiempo',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'category_id' => 2,
                'synopsis' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Las mejores epocas',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'category_id' => 2,
                'synopsis' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Conoce los años mas brillantes de la Argentina',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'category_id' => 2,
                'synopsis' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'Viaje a Estados unidos en el 1963',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'category_id' => 2,
                'synopsis' => 'Lo maravilloso de visitar lugares maravillosos en las distintas epocas de la humanidad lorem ipsum lorem ipsum lorem ipsum',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'Viajes a Canada',
                'description' => 'Discutamos las mejores epocas a las cuales viajar',
                'image' => null,
                'category_id' => 3,
                'synopsis' => null,
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
