<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ParticipationDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'week_id',
        'date',
        'start_time',
        'end_time',
    ];

    public function week()
    {
        return $this->belongsTo(Week::class);    
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function is_in_schedule(){
        $now = Carbon::now();

        return $now->format("H:i:s") >= $this->start_time && $now->format("H:i:s") <= $this->end_time;
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function day_status_class($day){
        $now = Carbon::now();
        $day_status_class = "";

        $dayOfWeek = $now->dayOfWeek;

        // Si el día ingresado es domingo se vuelve el último de la semana 
                $day = ($day == 0) ? 7 : $day;
        $dayOfWeek = ($dayOfWeek == 0) ? 7 : $dayOfWeek;
        
        // Si el día ingresado es menor al dia actual
        if($day < $dayOfWeek){
            $day_status_class = "finalizado";
        }

        // Si se trata del mismo día 
        if($day == $dayOfWeek){
            $day_status_class = "active";
        }

        return $day_status_class;
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function day_name()
    {
        $days = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

        $date = Carbon::createFromFormat('Y-m-d', $this->date);

        return $days[$date->dayOfWeek];
    }
}
