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
                'description' => 'Viaje a Mercurio: Experimenta las altas temperaturas y condiciones extremas de este planeta.',
                'image' => null,
                'price' => 2000000,
                'duration' => 40,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 2,
                'description' => 'Viaje a Venus: Explora la atmósfera densa y la superficie abrasadora de Venus.',
                'image' => null,
                'price' => 2500000,
                'duration' => 25,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 3,
                'description' => 'Viaje a Marte: Adéntrate en el planeta rojo y descubre su terreno único.',
                'image' => null,
                'price' => 3500000,
                'duration' => 40,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 4,
                'description' => 'Viaje a la Luna: Regresa a nuestro satélite natural y camina sobre su superficie.',
                'image' => null,
                'price' => 1000000,
                'duration' => 3,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 5,
                'description' => 'Viaje a Ceres: Explora este asteroide en el cinturón de asteroides entre Marte y Júpiter.',
                'image' => null,
                'price' => 3000000,
                'duration' => 55,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 6,
                'description' => 'Viaje a Europa: Visita esta luna de Júpiter y busca signos de vida bajo su capa de hielo.',
                'image' => null,
                'price' => 4000000,
                'duration' => 80,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 7,
                'description' => 'Viaje a Titán: Explora la luna más grande de Saturno, con sus lagos de metano y atmósfera densa.',
                'image' => null,
                'price' => 4500000,
                'duration' => 100,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'destiny_id' => 8,
                'description' => 'Viaje a Próxima Centauri b: Explora el exoplaneta más cercano a nuestro sistema solar.',
                'image' => null,
                'price' => 9000000,
                'duration' => 240,
                'date_of_departure' => '2023-10-18',
                'updated_at' => now(),
                'created_at' => now()
            ]
        ]);
    }
}
