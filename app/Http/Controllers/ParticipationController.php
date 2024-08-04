<?php

namespace App\Http\Controllers;

use App\Exports\GanadoresExport;
use Illuminate\Http\Request;
use App\Models\Participation;
use App\Models\ParticipationDay;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Http\Requests\ParticipationStoreRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ParticipationsExport;
use App\Models\AddPoints;
use App\Models\Score;
use App\Models\Week;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ParticipationController extends Controller
{
    /**
     * Función que regresa la vista para que guardar la informacion de una participacion
     * -------------------------------------------------------------------------------------------*/
    public function create()
    {
        $products = Product::all();

        $week = Week::currentWeek();

        if ($week) {
            return view('pages.codigo_lote', [
                'products'  => $products
            ]);
        } else {
            return redirect()->route('user.profile');
        }
    }

    /**
     * Función que crea una participacion
     * -------------------------------------------------------------------------------------------*/
    public function store(ParticipationStoreRequest $request)
    {
        $user = Auth::guard('user')->user();
        $week = Week::currentWeek();
        $participation_day = ParticipationDay::where('date', Carbon::now()->format('Y-m-d'))->first();

        Participation::create([
            'user_id'               => $user->id,
            'week_id'               => $week->id,
            'participation_day_id'  => $participation_day->id,
            'codigo_lote'           => $request->codigo_lote,
            'product_id'            => $request->product_id,
        ]);

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
    public function index(Week $week)
    {
        $participations = Participation::where('week_id', $week->id)->get();

        return view('backoffice.participations.index', [
            'week' => $week,
            'participations'    => $participations,
        ]);
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function export(Week $week)
    {
        return Excel::download(new ParticipationsExport($week), 'participaciones_' . $week->name . '.xlsx');
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function show(Participation $participation)
    {
        $partidas = Score::where('participation_id', $participation->id)->get();
        return view('backoffice.participations.show', [
            'partidas'    => $partidas,
        ]);
    }

    public function list_score(Score $score)
    {
        $lista = AddPoints::where('score_id', $score->id)->get();
        return view('backoffice.participations.detalle', [
            'lista'    => $lista,
        ]);
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function ganadores(Week $week)
    {
        $participations = Participation::join('scores', 'participations.id', '=', 'scores.participation_id')
            ->where('participations.week_id', $week->id)
            ->whereNotNull('scores.start')
            ->whereNotNull('scores.end')
            ->select(
                'participations.*',
                'scores.score as score',
                'scores.start as start',
                'scores.end as end',
                DB::raw('TIMESTAMPDIFF(SECOND, scores.start, scores.end) as duration_seconds'),
                DB::raw('CONCAT(FLOOR(TIMESTAMPDIFF(SECOND, scores.start, scores.end) / 60), "m ", MOD(TIMESTAMPDIFF(SECOND, scores.start, scores.end), 60), "s") as duration_minutes_seconds'),
                DB::raw('SEC_TO_TIME(TIMESTAMPDIFF(SECOND, scores.start, scores.end)) as duration_hms')
            )
            ->orderBy('score', 'desc')
            ->get();



        return view('backoffice.participations.ganadores', [
            'week'              => $week,
            'participations'    => $participations,
        ]);
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function ganadoresExport(Week $week)
    {
        return Excel::download(new GanadoresExport($week), 'ranking_' . $week->name . '.xlsx');
    }
}
