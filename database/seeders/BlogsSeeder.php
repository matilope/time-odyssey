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
                'description' => 'Embárcate en un emocionante viaje a Marte, el planeta rojo. Descubre paisajes asombrosos y observa el espacio profundo en un viaje inolvidable.',
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
                'title' => 'Naves Espaciales del Futuro: Descubre las Maravillas de la Tecnología Espacial',
                'description' => 'Explora la vanguardia de la tecnología espacial y sumérgete en el asombroso mundo de las naves espaciales de última generación.',
                'image' => null,
                'category_id' => 2,
                'synopsis' => '¿Te has preguntado alguna vez cómo serán las naves espaciales del futuro? En "Naves Espaciales del Futuro," te sumergirás en un viaje emocionante por el fascinante mundo de la tecnología espacial de última generación, con detalles concretos y datos impresionantes.

                Comenzando con la tecnología detrás de estas naves, te adentrarás en el funcionamiento interno de las naves espaciales más avanzadas. Descubrirás cómo se diseñan para resistir las condiciones extremas del espacio, desde la radiación hasta el vacío absoluto, y cómo proporcionan un ambiente seguro para astronautas y exploradores interplanetarios.
                
                La velocidad en el espacio es esencial, y te explicaremos cómo estas naves pueden recorrer distancias astronómicas a velocidades asombrosas. Por ejemplo, te sorprenderás al saber que pueden alcanzar velocidades que superan los 40,000 kilómetros por hora. Te ofreceremos una visión detallada de los sistemas de propulsión espacial que hacen posible estos viajes de alta velocidad.
                
                Pero la tecnología no se detiene ahí. Exploraremos las misiones espaciales más ambiciosas, desde llegar a otros planetas en cuestión de meses hasta adentrarse en los confines más lejanos de nuestro sistema solar. Aprenderás cuánto tiempo tomaría viajar 50 millones de kilómetros y cómo estas naves están allanando el camino hacia la exploración espacial de próxima generación.',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Viajar a la luna',
                'description' => 'Explora la Luna, nuestro satélite natural, y camina por su superficie única. Descubre cráteres y experimenta la gravedad lunar en este viaje excepcional.',
                'image' => null,
                'category_id' => 1,
                'synopsis' => 'La Luna, nuestro vecino celestial a 384,000 kilómetros de distancia, es un destino verdaderamente asombroso para unas vacaciones cortas e inolvidables. Este mundo misterioso está lleno de maravillas naturales que desafían la imaginación. Uno de los principales atractivos son los cráteres lunares, formaciones geológicas únicas que han intrigado a científicos y aventureros durante décadas.

                Explorar los cráteres lunares es una experiencia única. Algunos de estos cráteres albergan temperaturas extremas, ya que no tienen atmósfera que regule la temperatura. Te encontrarás en un paisaje lunar surrealista, con la superficie cubierta de polvo fino y la vista de la Tierra flotando en el cielo. Tu viaje se realizará en una nave espacial de última generación, diseñada para proporcionarte comodidad y seguridad en el entorno lunar.
                
                Durante tu estancia en la Luna, tendrás la oportunidad de visitar lugares emblemáticos como el Cráter Copérnico, que tiene alrededor de 93 kilómetros de diámetro y es conocido por su impactante apariencia. También podrás explorar el Cráter Tycho, famoso por su sistema de rayos brillantes que se extienden por kilómetros.
                
                Pero la Luna no es solo cráteres y paisajes desérticos. Es un lugar donde la ciencia y la exploración se unen. Podrás experimentar la gravedad lunar, que es aproximadamente un sexto de la de la Tierra, lo que te permitirá saltar con facilidad y moverte con agilidad.
                
                Este viaje a la Luna representa una oportunidad única para sumergirse en un mundo diferente al de la Tierra y descubrir los secretos de nuestro satélite natural. Es una aventura que te dejará con recuerdos inolvidables y una comprensión más profunda de nuestro sistema solar.
                
                Así que prepárate para despegar y explorar un destino verdaderamente fuera de este mundo. Tu viaje a la Luna te llevará a lugares únicos y te sumergirá en una experiencia que desafiará tus expectativas. ¡Bienvenidos a la maravilla lunar!',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Explorando los Misterios de la Vía Láctea: Nuestra Galaxia Hogar',
                'description' => 'Adéntrate en el fascinante universo de la Vía Láctea y descubre sus secretos, desde las estrellas más comunes hasta los agujeros negros más intrigantes.',
                'image' => null,
                'category_id' => 3,
                'synopsis' => 'La Vía Láctea, nuestra galaxia hogar, es un vasto y asombroso rincón del universo que continúa deslumbrando a científicos y amantes del espacio por igual. En este blog, te invitamos a explorar los misterios que esconde nuestra galaxia, brindándote información detallada y fascinante que te llevará a un emocionante viaje cósmico.

                En el corazón de la Vía Láctea, encontrarás una impresionante variedad de estrellas. Entre ellas, las enanas rojas se destacan como las más comunes. Descubre por qué estas estrellas pequeñas son tan abundantes y cómo su presencia contribuye a la diversidad de sistemas estelares en nuestra galaxia. Aprenderás sobre su ciclo de vida, sus características únicas y su importancia en el contexto galáctico.
                
                Pero la Vía Láctea es mucho más que estrellas. Alberga una amplia gama de planetas, algunos de los cuales pueden ofrecer pistas sobre la posibilidad de vida en otros rincones del universo. Exploraremos los exoplanetas, mundos distantes que nos plantean interrogantes sobre la existencia de vida más allá de la Tierra. Te sumergirás en la emocionante búsqueda de exoplanetas habitables y las técnicas utilizadas para detectarlos.
                
                Y, por supuesto, no podríamos hablar de la Vía Láctea sin mencionar a los agujeros negros. Estos objetos cósmicos misteriosos y poderosos han capturado la imaginación de científicos y aficionados durante décadas. Aquí, te sumergirás en el fascinante mundo de los agujeros negros y descubrirás cómo se forman a partir de la muerte de estrellas masivas. Aprenderás sobre sus diferentes tipos y tamaños, desde los agujeros negros estelares hasta los supermasivos que residen en el centro de galaxias. Además, explorarás cómo interactúan con la materia circundante y cómo su presencia influye en la dinámica galáctica.',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'Agujeros Negros: Los Devoradores de Luz en el Universo',
                'description' => 'Sumérgete en el misterioso mundo de los agujeros negros y descubre cómo estas enigmáticas entidades cósmicas desafían las leyes de la física.',
                'image' => null,
                'category_id' => 4,
                'synopsis' => 'Los agujeros negros son una de las maravillas más enigmáticas y aterradoras del universo. En este fascinante viaje cósmico, te invitamos a adentrarte en el mundo de estas enigmáticas entidades, donde las leyes de la física parecen desafiar toda lógica.

                Un agujero negro es un lugar en el espacio-tiempo donde la gravedad es tan intensa que nada, ni siquiera la luz, puede escapar de su atracción. Pero, ¿cómo se forman estos devoradores de luz? Exploraremos las diferentes formas en que los agujeros negros pueden nacer, desde las supernovas hasta las colisiones de estrellas.
                
                Una vez que un objeto se ha convertido en un agujero negro, su destino es aún más misterioso. Viajar al interior de un agujero negro es un viaje hacia lo desconocido, donde las leyes de la física convencional dejan de tener sentido. Desentrañaremos algunos de los enigmas más profundos de los agujeros negros, como los horizontes de sucesos y las singularidades.
                
                A lo largo de la historia, los agujeros negros han sido una fuente de inspiración y especulación científica. Exploraremos cómo los científicos han investigado estos objetos y cómo las observaciones recientes, como las ondas gravitacionales, han revolucionado nuestra comprensión de los agujeros negros.',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'Viajar al satélite de Jupiter, Europa',
                'description' => 'Descubre Europa, la luna de Júpiter. Explora paisajes helados y misteriosas crestas geológicas en este viaje fascinante.',
                'image' => null,
                'category_id' => 1,
                'synopsis' => 'Embárcate en un viaje sin precedentes a Europa, el intrigante satélite de Júpiter. Descubre un mundo oculto bajo una capa de hielo que alberga secretos profundos y emocionantes. Europa, que se encuentra a una distancia de aproximadamente 670 millones de kilómetros de la Tierra, es uno de los satélites más grandes de Júpiter, con un diámetro de unos 3,100 kilómetros.

                A medida que exploras Europa, te sorprenderás con su geología única, que incluye una superficie repleta de fracturas y crestas de hielo, así como cráteres que revelan la historia de impactos pasados. A pesar de las temperaturas extremadamente frías, la presencia de un vasto océano subsuperficial bajo el hielo sugiere la posibilidad de vida, lo que hace de Europa un destino de exploración emocionante.
                
                Además, este satélite posee picos de hielo y montañas que se elevan por encima de su superficie helada, proporcionando vistas espectaculares y oportunidades únicas para la investigación científica. Te invitamos a sumergirte en la fascinante búsqueda de seres extraterrestres y a explorar los misterios de Europa en nuestro blog interplanetario.',
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
