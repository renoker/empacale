<?php

namespace Database\Seeders;

use App\Models\ParticipationDay;
use App\Models\Week;
use Carbon\CarbonPeriod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipationDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weeks = Week::all();

        foreach ($weeks as $week) {
            $period = CarbonPeriod::create($week->start_date, $week->end_date);

            foreach ($period as $date) {
                ParticipationDay::create([
                    'week_id'       => $week->id,
                    'date'          => $date->format('Y-m-d'),
                    'start_time'    => "10:00:00",
                    'end_time'      => "20:00:00",
                ]);
            }
        }
    }
}
