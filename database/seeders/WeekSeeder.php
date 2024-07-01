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
            'start_date'    => '2024-07-01 00:00:00',
            'end_date'      => '2024-07-07 23:59:59',
        ]);

        Week::create([
            'name'          => 'Semana 2',
            'start_date'    => '2024-07-08 00:00:00',
            'end_date'      => '2024-07-14 23:59:59',
        ]);

        Week::create([
            'name'          => 'Semana 3',
            'start_date'    => '2024-07-15 00:00:00',
            'end_date'      => '2024-07-21 23:59:59',
        ]);

        Week::create([
            'name'          => 'Semana 4',
            'start_date'    => '2024-07-22 00:00:00',
            'end_date'      => '2024-07-28 23:59:59',
        ]);
    }
}
