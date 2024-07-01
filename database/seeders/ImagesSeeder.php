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
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/lentes.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/lentes.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/lentes.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/lentes.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/lentes.svg',
            'points'    => 0,
            'week_id'   => 1,
        ]);

        Images::create([
            'src'     => 'http://127.0.0.1:8000/assets/images/game/sem1/lentes.svg',
            'points'    => 10,
            'week_id'   => 1,
        ]);
    }
}
