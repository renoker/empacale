<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/aletasnaranjas-min.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/bikinisrosa-min.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/bloqueadorsolar-min.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/camisa-triantes-amarrilla-min.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/camisahawaina-min.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/chalecosalvavidas-min.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/gafasde-buceo-min.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/inflabe-flamingo-min.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/pelota-playa-min.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/sandalia-min.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/sombrerodepaja-min.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/sombrilla-colores-min.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/tenedor-min.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/traje-short-azul-min.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
    }
}
