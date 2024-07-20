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
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/lentes_naranja.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/maruchan_vaso.svg',
            'points'    => 5,
            'week_id'   => 1,
        ]);

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
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_dorados/maruchan_bowl_dorado.svg',
            'points'    => 10,
            'week_id'   => 2,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_dorados/maruchan_ottimabolsa_dorado.svg',
            'points'    => 20,
            'week_id'   => 2,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_dorados/maruchan_ramen_dorado.svg',
            'points'    => 30,
            'week_id'   => 2,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_dorados/maruchan_vaso_dorado.svg',
            'points'    => 40,
            'week_id'   => 2,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_dorados/maruchan_yakisoba_dorado.svg',
            'points'    => 50,
            'week_id'   => 2,
        ]);
        // Dorados END

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/blusaamarilla-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/botaslluvia-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/camarafoto-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/chamarracafe-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/gorra-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/guayabera-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/jeansazules-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/lentesdesol-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/maruchan_bowl.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/maruchan_yakisoba.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/morral-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/sandaliasdevestir-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/sombreronegro-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/sueterverde-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/tenedor-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/tenisgrises-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/vestidocasualnegro-min.svg',
            'points'    => 5,
            'week_id'   => 2,
        ]);
        // ERRONEOS SEMANA 2
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/alcancia.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/ancla-de-barco.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/bate-de-beisbol.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/caballito_feria.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/conotansito.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/cubeta.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/escalera.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/escusado.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/extintor.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/foco-electrico.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/guitarra-electrica.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/hidrante.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/lampara_lava.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/lamparapantalla.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/llanta.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/megafono.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/mesa.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/noestacionarse.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/patineta.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/pesas.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/PINO.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/pollodehule.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/ramodeflores.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/refrigerador.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/regadera.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/RESBALADILLA.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/ropero.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/semaforo.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/silla.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem2/objetos_erroneos/tetera.svg',
            'points'    => 0,
            'week_id'   => 2,
        ]);
        // ---------------------------------------------------------------- SEMANA 3 --------------------------------------------------------------------------------------------------------------------------------
        // Dorados
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_dorados/maruchan_bowl_dorado.svg',
            'points'    => 10,
            'week_id'   => 3,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_dorados/maruchan_ottimabolsa_dorado.svg',
            'points'    => 20,
            'week_id'   => 3,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_dorados/maruchan_ramen_dorado.svg',
            'points'    => 30,
            'week_id'   => 3,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_dorados/maruchan_vaso_dorado.svg',
            'points'    => 40,
            'week_id'   => 3,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_dorados/maruchan_yakisoba_dorado.svg',
            'points'    => 50,
            'week_id'   => 3,
        ]);
        // Dorados END

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/bolsadormir.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/botasmineras.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/brujula.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/bufandaazul.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/cantimplora.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/casacampana.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/cobijapuntos.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/gorrobeeanie.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/guantes.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/impermeableamarillo.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/linterna.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/mantelrojo.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/maruchan_ramen.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/olla.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/shortscargo.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/tenedormaruchan.svg',
            'points'    => 5,
            'week_id'   => 3,
        ]);

        // ERRONEOS SEMANA 3
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/alcancia.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/ancla-de-barco.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/bate-de-beisbol.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/caballito_feria.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/conotansito.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/cubeta.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/escalera.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/escusado.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/extintor.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/foco-electrico.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/guitarra-electrica.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/hidrante.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/lampara_lava.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/lamparapantalla.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/llanta.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/megafono.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/mesa.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/noestacionarse.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/patineta.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/pesas.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/PINO.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/pollodehule.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/ramodeflores.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/refrigerador.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/regadera.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/RESBALADILLA.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/ropero.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/semaforo.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/silla.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem3/objetos_erroneos/tetera.svg',
            'points'    => 0,
            'week_id'   => 3,
        ]);
        // ---------------------------------------------------------------- SEMANA 4 --------------------------------------------------------------------------------------------------------------------------------
        // Dorados
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_dorados/maruchan_bowl_dorado.svg',
            'points'    => 10,
            'week_id'   => 4,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_dorados/maruchan_ottimabolsa_dorado.svg',
            'points'    => 20,
            'week_id'   => 4,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_dorados/maruchan_ramen_dorado.svg',
            'points'    => 30,
            'week_id'   => 4,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_dorados/maruchan_vaso_dorado.svg',
            'points'    => 40,
            'week_id'   => 4,
        ]);
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_dorados/maruchan_yakisoba_dorado.svg',
            'points'    => 50,
            'week_id'   => 4,
        ]);
        // Dorados END

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/blazer_gris.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/bolsa_negra_mano.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/camara_fotografica.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/camisa_blanca.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/cepillo_de_dientes.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/cinturon_cafe.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/gorra_roja.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/maruchan_ottima.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/maruchan_ottimabolsa.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/peine.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/perfume.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/reloj.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/sombrilla.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/sudadera_azul.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/tenedor_maruchan.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/vestido_rojo.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/zapato_de_vestir_negro.svg',
            'points'    => 5,
            'week_id'   => 4,
        ]);

        // ERRONEOS SEMANA 3
        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/alcancia.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/ancla-de-barco.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/bate-de-beisbol.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/caballito_feria.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/conotansito.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/cubeta.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/escalera.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/escusado.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/extintor.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/foco-electrico.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/guitarra-electrica.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/hidrante.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/lampara_lava.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/lamparapantalla.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/llanta.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/megafono.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/mesa.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/noestacionarse.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/patineta.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/pesas.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/PINO.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/pollodehule.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/ramodeflores.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/refrigerador.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/regadera.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/RESBALADILLA.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/ropero.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/semaforo.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/silla.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem4/objetos_erroneos/tetera.svg',
            'points'    => 0,
            'week_id'   => 4,
        ]);
    }
}
