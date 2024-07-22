<?php

namespace Database\Seeders;

use App\Models\Week;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Week::create([
            'name'          => 'Semana 1',
            'start_date'    => '2024-07-22 00:00:00',
            'end_date'      => '2024-07-28 23:59:59',
        ]);

        Week::create([
            'name'          => 'Semana 2',
            'start_date'    => '2024-07-29 00:00:00',
            'end_date'      => '2024-08-04 23:59:59',
        ]);

        Week::create([
            'name'          => 'Semana 3',
            'start_date'    => '2024-08-05 00:00:00',
            'end_date'      => '2024-08-11 23:59:59',
        ]);

        Week::create([
            'name'          => 'Semana 4',
            'start_date'    => '2024-08-12 00:00:00',
            'end_date'      => '2024-08-18 23:59:59',
        ]);
    }
}
