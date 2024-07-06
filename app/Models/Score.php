<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = ['scores'];

    public function calcularDiferencia($start, $end)
    {
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
    }
}
