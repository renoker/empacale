<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Participation;
use App\Models\Week;
use Illuminate\Support\Facades\DB;

class GanadoresExport implements FromCollection, WithMapping, WithHeadings
{
    protected Week $week;

    public function __construct(Week $week)
    {
        $this->week = $week;
    }

    public function collection()
    {
        $participations = Participation::join('scores', 'participations.id', '=', 'scores.participation_id')
            ->where('participations.week_id', $this->week->id)
            ->whereNotNull('scores.start')
            ->whereNotNull('scores.end')
            ->select(
                'participations.*',
                'scores.score as score',
                'scores.start as start',
                'scores.end as end'
            )
            ->orderBy('score', 'desc')
            ->get();

        return $participations;
    }

    public function map($participation): array
    {
        $informacionPartidas = $participation->informacion_partidas();
        $informacionArray = json_decode($informacionPartidas, true);
        $row = [
            $participation->user->created_at,
            $participation->user->name,
            $participation->user->email,
            $participation->user->phone,
            $participation->no_vidas(),
            $participation->created_at,
            $participation->codigo_lote,
            $participation->product->name,
            $informacionArray[0]['fecha'] ?? 'Sin partida',
            $informacionArray[0]['objetos_correctos'] ?? 'Sin partida',
            $informacionArray[0]['objetos_dorados'] ?? 'Sin partida',
            $informacionArray[0]['objetos_erroneos'] ?? 'Sin partida',
            $informacionArray[0]['puntaje'] ?? 'Sin partida',
            $informacionArray[0]['tiempo_participacion'] ?? 'Sin partida',
            $informacionArray[1]['fecha'] ?? 'Sin partida',
            $informacionArray[1]['objetos_correctos'] ?? 'Sin partida',
            $informacionArray[1]['objetos_dorados'] ?? 'Sin partida',
            $informacionArray[1]['objetos_erroneos'] ?? 'Sin partida',
            $informacionArray[1]['puntaje'] ?? 'Sin partida',
            $informacionArray[1]['tiempo_participacion'] ?? 'Sin partida',
            $informacionArray[2]['fecha'] ?? 'Sin partida',
            $informacionArray[2]['objetos_correctos'] ?? 'Sin partida',
            $informacionArray[2]['objetos_dorados'] ?? 'Sin partida',
            $informacionArray[2]['objetos_erroneos'] ?? 'Sin partida',
            $informacionArray[2]['puntaje'] ?? 'Sin partida',
            $informacionArray[2]['tiempo_participacion'] ?? 'Sin partida'
        ];

        return $row;
    }

    public function headings(): array
    {
        return [
            'Fecha y hora de Registro del usuario',
            'Nombre',
            'Email',
            'Teléfono',
            'Total de Vidas Jugadas',
            'Fecha y hora de registro de Código Lote Primeras 3 Vidas',
            'Código Lote Primeras 3 Vidas',
            'Producto Código LOTE Primeras 3 Vidas',
            'Fecha y hora de Participación Vida 1',
            'Total de objetos Correctos metidos a la maleta Vida 1',
            'Total de objetos Dorados metidos a la maleta Vida 1',
            'Total de objetos Erróneos metidos a la maleta Vida 1',
            'Total de puntos acumulados Vida 1',
            'Tiempo total de participación Vida 1',
            'Fecha y hora de Participación Vida 2',
            'Total de objetos Correctos metidos a la maleta Vida 2',
            'Total de objetos Dorados metidos a la maleta Vida 2',
            'Total de objetos Erróneos metidos a la maleta Vida 2',
            'Total de puntos acumulados Vida 2',
            'Tiempo total de participación Vida 2',
            'Fecha y hora de Participación Vida 3',
            'Total de objetos Correctos metidos a la maleta Vida 3',
            'Total de objetos Dorados metidos a la maleta Vida 3',
            'Total de objetos Erróneos metidos a la maleta Vida 3',
            'Total de puntos acumulados Vida 3',
            'Tiempo total de participación Vida 3'
        ];
    }
}
