<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Week;
use App\Models\User;

class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    protected Week $week;

    public function __construct(Week $week)
    {
        $this->week = $week;
    }

    public function collection()
    {
        $users = User::whereBetween('created_at', [$this->week->start_date, $this->week->end_date])->get();
        
        return $users;
    }

    public function map($user): array
    {
        return [
            $user->created_at,
            $user->name,
            $user->phone,
            $user->email,
        ];
    }

    public function headings(): array
    {
        return [
            'Fecha y hora de Registro', 
            'Nombre',
            'Teléfono', 
            'Email', 
        ];
    }
}
