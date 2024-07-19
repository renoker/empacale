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
        // Dorados
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_InstantLunch_V3.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_ramen_dorado.svg',
            'points'    => 20,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_bowl_dorado.svg',
            'points'    => 30,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_yakisoba_dorado.svg',
            'points'    => 40,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_ottima_dorado.svg',
            'points'    => 50,
            'week_id'   => 1,
        ]);
        // Dorados END
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/aletasnaranjas-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/bikinisrosa-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/bloqueadorsolar-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/camisa-triantes-amarrilla-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/camisahawaina-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/chalecosalvavidas-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/gafasde-buceo-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/inflabe-flamingo-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/pelota-playa-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/sandalia-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/sombrerodepaja-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/sombrilla-colores-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/tenedor-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/traje-short-azul-min.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);
        // Elementos erroneos
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/alcancia.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/ancla-de-barco.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/bate-de-beisbol.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/caballito-feria.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/conotansito.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/cubeta.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/escalera.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/escusado.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/extintor.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/foco-electrico.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/guitarra-electrica.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/hidrante.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/lampara-lava.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/lamparapantalla.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/llanta.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/megafono.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/mesa.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/noestacionarse.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/patineta.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/pesas.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/PINO.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/pollodehule.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/ramodeflores.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/refrigerador.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/regadera.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/RESBALADILLA.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/ropero.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/semaforo.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/silla.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/tetera.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
        // ---------------------------------------------------------------- SEMANA 2 --------------------------------------------------------------------------------------------------------------------------------
        // Dorados
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_InstantLunch_V3.svg',
            'points'    => 10,
            'week_id'   => 2,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_ramen_dorado.svg',
            'points'    => 20,
            'week_id'   => 2,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_bowl_dorado.svg',
            'points'    => 30,
            'week_id'   => 2,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_yakisoba_dorado.svg',
            'points'    => 40,
            'week_id'   => 2,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/maruchan_ottima_dorado.svg',
            'points'    => 50,
            'week_id'   => 2,
        ]);
        // Dorados END

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/1.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/2.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/3.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/4.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/6.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/7.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/8.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/9.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/10.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/11.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/12.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/13.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/14.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/15.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/16.png',
            'points'    => 5,
            'week_id'   => 2,
        ]);
    }
}
