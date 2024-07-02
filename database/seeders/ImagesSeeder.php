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
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/aletas_naranjas.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/bikini_rosa.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/bloqueador_solar.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/camisa_amarrilla.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/camisa_hawaina.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/chaleco_salvavidas.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/gafas_buceo.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/inflabe_flamingo.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/lentes_naranja.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/pelota_playa.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/sandalia.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/sombrero_paja.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/sombrilla_playa_colores.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/tenedor.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/traje_short_azul.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'https://phpstack-731537-4677517.cloudwaysapps.com/assets/images/game/sem1/lentes.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);
    }
}
