<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'destiny_id' => 1,
                'description' => '¡Te invitamos a un emocionante viaje a Mercurio! Nuestra nave espacial de vanguardia te llevará en un viaje de 40 días de ida y 40 días de regreso a este planeta fascinante. Durante el trayecto, disfrutarás de un alojamiento de lujo con todas las comodidades que necesitas, incluyendo habitaciones privadas y deliciosas cenas gourmet. Una vez en Mercurio, explorarás su superficie durante una estancia de 7 días en la parte entre el atardecer y la noche, donde las temperaturas son perfectas y no hay radiación solar. Descubre paisajes asombrosos y lugares únicos que solo Mercurio puede ofrecer. Desde los misteriosos cráteres hasta las vistas panorámicas que te dejarán sin aliento, cada día en Mercurio te sorprenderá. Este viaje no solo es una oportunidad única para visitar un mundo desconocido, sino también una experiencia que quedará grabada en tu memoria para siempre.',
                'image' => 'services_covers/mercury.png',
                'price' => 2000000,
                'duration' => 40,
                'lodging' => 7,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 2,
                'description' => '¡Prepárate para una expedición única a Venus, el planeta ardiente! Nuestra nave espacial te llevará en un emocionante viaje de 25 días de ida y 25 días de regreso a la órbita venusiana, donde vivirás una experiencia inolvidable. Aunque no aterrizaremos en su superficie, estarás en una zona de la atmósfera donde las temperaturas rondan los 30 grados Celsius, lo que te permitirá explorar el entorno venusiano con total comodidad. Durante esta expedición, disfrutarás de alojamiento de lujo en nuestra nave espacial, con habitaciones privadas y deliciosas cenas gourmet para satisfacer tu paladar. Además, contarás con trajes espaciales de última generación que te protegerán de las condiciones extremas de Venus mientras observas de cerca este mundo asombroso. Desde la órbita, tendrás la oportunidad de maravillarte con la inmensidad de las nubes venusianas y los fenómenos únicos de este planeta. Esta expedición te brindará una perspectiva única de Venus y una experiencia que atesorarás para siempre.                ',
                'image' => 'services_covers/venus.png',
                'price' => 2500000,
                'duration' => 25,
                'lodging' => 10,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 3,
                'description' => 'Embárcate en la aventura de tu vida en el planeta rojo con un viaje de 40 días de ida y vuelta a Marte. Durante tu estancia de 14 días en Marte, explorarás lugares emblemáticos como el cráter "Valles Marineris" y los "Montes Tharsis", experimentando la emoción de caminar sobre su superficie única. Disfrutarás de alojamiento de lujo en nuestra nave espacial, cenas gourmet y trajes espaciales de última generación. Desde la órbita, admirarás el majestuoso Monte Olimpo y disfrutarás de vistas panorámicas del Planeta Rojo. Una experiencia inolvidable que atesorarás para siempre.',
                'image' => 'services_covers/mars.png',
                'price' => 3500000,
                'duration' => 40,
                'lodging' => 14,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 4,
                'description' => '¡Prepárate para una experiencia inolvidable en nuestro viaje a la Luna, donde te embarcarás en un emocionante viaje espacial a bordo de una nave espacial de última generación. Durante el viaje, disfrutarás de comodidades de lujo, incluyendo un dormitorio privado y tres exquisitas cenas gourmet al día mientras te acercas a nuestro vecino celestial. Una vez en la Luna, pasarás siete días explorando sus maravillas, desde lugares icónicos como el Mar de la Tranquilidad hasta los enigmáticos cráteres que pueblan su superficie. Tu estadía en la Luna será igual de cómoda, con instalaciones de vanguardia, habitaciones con vistas espectaculares y deliciosa comida lunar preparada especialmente para ti. En total, el viaje te llevará tres días de ida, tres días de regreso y siete días mágicos en la Luna. No es solo un viaje, es una aventura fuera de este mundo que quedará grabada en tu memoria para siempre.',
                'image' => 'services_covers/moon.png',
                'price' => 1000000,
                'duration' => 3,
                'lodging' => 7,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 5,
                'description' => 'Embárcate en una emocionante odisea espacial hacia Ceres, el asteroide más grande del cinturón de asteroides entre Marte y Júpiter. Con un viaje de 55 días de ida y 55 días de regreso, tendrás tiempo de sobra para explorar este mundo fascinante. Durante tu estancia de 7 días en Ceres, podrás visitar lugares extraordinarios como el cráter "Occator" y las misteriosas manchas brillantes que han desconcertado a los científicos durante años. Nuestra nave espacial te brindará un alojamiento de primera clase con comidas gourmet y todas las comodidades que necesitas para disfrutar al máximo de esta aventura interplanetaria.',
                'image' => 'services_covers/ceres.png',
                'price' => 3000000,
                'duration' => 55,
                'lodging' => 7,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 6,
                'description' => 'Prepárate para una exploración única en Europa, una de las lunas de Júpiter, con un viaje de 80 días de ida y 80 días de regreso. Durante tu estancia de 10 días en Europa, te sumergirás en un mundo fascinante, explorando su superficie helada y buscando signos de vida bajo su capa de hielo. Podrás visitar lugares emblemáticos como el misterioso "Conamara Chaos" y experimentar la belleza única de este satélite joviano. Nuestra nave espacial te brindará alojamiento de primera clase, cenas gourmet y todas las comodidades necesarias para una aventura espacial inolvidable.',
                'image' => 'services_covers/europa.png',
                'price' => 4000000,
                'duration' => 80,
                'lodging' => 10,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 7,
                'description' => 'Embarca en una expedición única hacia Titán, la luna más grande de Saturno, con un viaje de 100 días de ida y 100 días de regreso. Durante tu estancia de 14 días en Titán, te sumergirás en un mundo alienígena de lagos de metano y una densa atmósfera. Explorarás lugares asombrosos como el "Kraken Mare" y el "Mar de Ligeia", mientras te aventuras en esta luna intrigante. Nuestra nave espacial te ofrecerá un alojamiento excepcional, cenas gourmet y todas las comodidades necesarias para una experiencia espacial inigualable.',
                'image' => 'services_covers/titan.png',
                'price' => 4500000,
                'duration' => 100,
                'lodging' => 14,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 8,
                'description' => 'Prepárate para una aventura épica con un viaje de 240 días de ida y 240 días de regreso a Próxima Centauri b, el exoplaneta más cercano a nuestro sistema solar. Durante tu estancia de 30 días en este mundo distante, disfrutarás de comodidades extremas, incluyendo un gimnasio de última generación para mantenerte en forma durante el viaje. Explora este exoplaneta fascinante, con su paisaje alienígena y su atmósfera única. Descubre maravillas naturales como los "Bosques de Centauri" y experimenta la vida en un mundo diferente. Nuestra nave espacial te brindará un alojamiento de lujo, cenas gourmet y todas las comodidades necesarias para una experiencia espacial verdaderamente única.',
                'image' => 'services_covers/proxima_centauri_b.png',
                'price' => 19000000,
                'duration' => 240,
                'lodging' => 30,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
