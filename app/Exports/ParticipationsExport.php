<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Participation;
use App\Models\ParticipationDay;

class ParticipationsExport implements FromCollection, WithMapping, WithHeadings
{
    protected ParticipationDay $participation_day;

    public function __construct(ParticipationDay $participation_day)
    {
        $this->participation_day = $participation_day;
    }

    public function collection()
    {
        $participations = Participation::where('participation_day_id', $this->participation_day->id)->get();

        return $participations;
    }

    public function map($participation): array
    {
        $row = [
            $participation->user->created_at,
            $participation->created_at,
            $participation->user->name,
            $participation->user->phone, 
            $participation->user->email,
            $participation->codigo_lote,
            $participation->product->name,
            $participation->photos->count(),
            $participation->approved_photos->count(),
            route('participation.show', $participation),
        ];

        for($i = 0; $i < 10; $i++)
        {
            if ($participation->photos && $participation->photos->count() >= ($i + 1))
            {
                array_push($row, route('photo.show', $participation->photos[$i]));
                array_push($row, $participation->photos[$i]->photo_status->name);
                array_push($row, $participation->photos[$i]->created_at);
            }
            else{
                array_push($row, "-");
                array_push($row, "-");
                array_push($row, "-");
            }
        }
        

        return $row;
    }

    public function headings(): array
    {
        return [
            'Fecha y hora de Registro del usuario', 
            'Fecha y hora de registro de Código Lote',
            'Nombre',
            'Teléfono', 
            'Email',
            'Código Lote',
            'Producto',
            'Total fotos cargadas',
            'Total fotos aprovadas',
            'Liga detalle de la partida',
            'Enlace foto 1',
            'Estatus foto 1',
            'Fecha y hora de carga foto 1',
            'Enlace foto 2',
            'Estatus foto 2',
            'Fecha y hora de carga foto 2',
            'Enlace foto 3',
            'Estatus foto 3',
            'Fecha y hora de carga foto 3',
            'Enlace foto 4',
            'Estatus foto 4',
            'Fecha y hora de carga foto 4',
            'Enlace foto 5',
            'Estatus foto 5',
            'Fecha y hora de carga foto 5',
            'Enlace foto 6',
            'Estatus foto 6',
            'Fecha y hora de carga foto 6',
            'Enlace foto 7',
            'Estatus foto 7',
            'Fecha y hora de carga foto 7',
            'Enlace foto 8',
            'Estatus foto 8',
            'Fecha y hora de carga foto 8',
            'Enlace foto 9',
            'Estatus foto 9',
            'Fecha y hora de carga foto 9',
            'Enlace foto 10',
            'Estatus foto 10',
            'Fecha y hora de carga foto 10',
        ];
    }
}
