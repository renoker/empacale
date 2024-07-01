<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

class Week extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    protected $cast = [
        'start_date'    => 'datetime',
        'end_date'      => 'datetime',
    ];

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function participation_days()
    {
        return $this->hasMany(ParticipationDay::class);
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function show_on_web()
    {
        $show_on_web = false;
        $winners = $this->winners();

        foreach ($winners as $winner) {
            if ($winner->show_on_web) {
                $show_on_web = true;
            }
        }

        return $show_on_web;
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function date_for_day($day)
    {
        $months = ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic"];
        $date_for_day = "";

        foreach ($this->participation_days as $participation_day) {
            $date_participation_day = Carbon::createFromFormat('Y-m-d', $participation_day->date);
            if ($date_participation_day->dayOfWeek == $day) {
                $date_for_day = $date_participation_day->format('d') . " " . $months[$date_participation_day->format('n') - 1];
            }
        }

        return $date_for_day;
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public static function currentWeek()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $week = Week::whereRaw("'$now' between start_date and end_date")
            ->first();

        return $week;
    }
}
