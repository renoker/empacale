<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participation;
use App\Models\ParticipationDay;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Http\Requests\ParticipationStoreRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ParticipationsExport;
use Illuminate\Support\Facades\Session;

class ParticipationController extends Controller
{
    /**
     * Función que regresa la vista para que guardar la informacion de una participacion
     * -------------------------------------------------------------------------------------------*/
    public function create()
    {
        $user = Auth::user();
        $products = Product::all();

        $participation_day = ParticipationDay::where('date', Carbon::now()->format('Y-m-d'))->first();
        $participation = Participation::where('user_id', $user->id)->where('participation_day_id', $participation_day->id)->first();

        // En el caso que el usuario ya ingreso un codigo lote para este día se redirige
        // a la pantalla del perfil
        if ($participation) {
            return redirect()->route('user.profile');
        }

        return view('pages.codigo_lote', [
            'products'  => $products
        ]);
    }

    /**
     * Función que crea una participacion
     * -------------------------------------------------------------------------------------------*/
    public function store(ParticipationStoreRequest $request)
    {
        $user = Auth::user();
        $participation_day = ParticipationDay::where('date', Carbon::now()->format('Y-m-d'))->first();

        // Si el usuario ya tiene participación para el día se quita
        $participation = Participation::where('user_id', $user->id)->where('participation_day_id', $participation_day->id)->first();
        if ($participation) {
            return redirect()->route('user.profile');
        }

        $participation = Participation::create([
            'user_id'               => $user->id,
            'participation_day_id'  => $participation_day->id,
            'codigo_lote'           => $request->codigo_lote,
            'product_id'            => $request->product_id,
        ]);

        Session::put('participation_id', $participation->id);

        return redirect()->route('user.profile');
    }

    /*
    |------------------------------------------------------------------------------------------
    | PANEL DE ADMNISTRACION
    |------------------------------------------------------------------------------------------
    */
    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function index(ParticipationDay $participation_day)
    {
        $participations = Participation::where('participation_day_id', $participation_day->id)->get();

        return view('backoffice.participations.index', [
            'participation_day' => $participation_day,
            'participations'    => $participations,
        ]);
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function export(ParticipationDay $participation_day)
    {
        return Excel::download(new ParticipationsExport($participation_day), 'participaciones_' . $participation_day->date . '.xlsx');
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function show(Participation $participation)
    {
        return view('backoffice.participations.show', [
            'participation'    => $participation,
        ]);
    }
}
