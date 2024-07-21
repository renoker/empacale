<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'week_id',
        'participation_day_id',
        'codigo_lote',
        'product_id'
    ];

    public function participation_day()
    {
        return $this->belongsTo(ParticipationDay::class);
    }

    public function score()
    {
        return $this->belongsTo(Score::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function vidas()
    {
        $vidas = 3;
        $score = Score::where('participation_id', $this->id)->count();
        $vidas = $vidas - $score;
        return $vidas;
    }

    public function no_vidas()
    {
        $score = Score::where('participation_id', $this->id)->count();
        return $score;
    }

    public function calcularDiferencia($start, $end)
    {
        try {
            // Fecha de inicio
            $startDate = Carbon::createFromFormat('Y-m-d H:i:s.u', $start);

            // Fecha de fin
            $endDate = Carbon::createFromFormat('Y-m-d H:i:s.u', $end);

            // Diferencia precisa en un formato legible para humanos
            $diffForHumans = $startDate->diffForHumans($endDate, [
                'parts' => 7, // especifica el número de partes a mostrar
                'short' => true, // utiliza abreviaturas
                'syntax' => Carbon::DIFF_ABSOLUTE // diferencia absoluta
            ]);

            // Retornar los resultados en formato JSON
            return $diffForHumans;
        } catch (InvalidFormatException $e) {
            // Captura y maneja la excepción
            return 'Participacion invalida, no termino el juego';
        }
    }

    public function informacion_partidas()
    {
        // Obtén los Scores por el participation_id
        $scores = Score::where('participation_id', $this->id)->get();
        $informacion = [];

        // Asegúrate de que existen Scores
        if ($scores->isEmpty()) {
            return response()->json(['error' => 'Scores no encontrados'], 404);
        }

        foreach ($scores as $score) {
            // Obtén los AddPoints relacionados con el Score actual
            $addPoints = AddPoints::where('score_id', $score->id)->get();

            $countCincoPuntos = 0;
            $countMasDeCincoPuntos = 0;
            $countCeroPuntos = 0;

            foreach ($addPoints as $addPoint) {
                // Obtén la imagen relacionada con el AddPoint actual
                $image = Images::find($addPoint->image_id);
                if ($image) {
                    // Clasifica la imagen según sus puntos y cuenta
                    if ($image->points == 5) {
                        $countCincoPuntos++;
                    } elseif ($image->points > 5) {
                        $countMasDeCincoPuntos++;
                    } elseif ($image->points == 0) {
                        $countCeroPuntos++;
                    }
                }
            }

            // Ajustar la respuesta si los conteos son cero
            $countCincoPuntos = $countCincoPuntos == 0 ? 'vacio' : $countCincoPuntos;
            $countMasDeCincoPuntos = $countMasDeCincoPuntos == 0 ? 'vacio' : $countMasDeCincoPuntos;
            $countCeroPuntos = $countCeroPuntos == 0 ? 'vacio' : $countCeroPuntos;

            $informacion[] = [
                'fecha' => Carbon::parse($score->start)->format('d-m-Y H:i:s'),
                'puntaje' => $score->score,
                'tiempo_participacion' => $this->calcularDiferencia($score->start, $score->end),
                'objetos_correctos' => $countCincoPuntos,
                'objetos_dorados' => $countMasDeCincoPuntos,
                'objetos_erroneos' => $countCeroPuntos
            ];
        }

        return json_encode($informacion);
    }
}
