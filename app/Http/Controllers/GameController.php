<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use App\Models\AddPoints;
use App\Models\ListProduct;
use App\Models\Participation;
use App\Models\ParticipationDay;
use App\Models\Score;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class GameController extends Controller
{
    public function index()
    {
        $week = Week::currentWeek();
        $listas = ListProduct::where('week_id', $week->id)->get();

        $user = Auth::guard('user')->user();
        $participation = Participation::where('user_id', $user->id)->latest()->first();
        $vidas = Score::where('user_id', $user->id)->where('participation_id', $participation->id)->count();

        if ($vidas <= 3) {
            if ($week && $week->id == 1) {
                return view('pages.game', [
                    'lista' => $listas,
                    'week' => $week
                ]);
            } else if ($week && $week->id == 2) {
                return view('pages.game_sem_dos', [
                    'lista' => $listas,
                    'week' => $week
                ]);
            }
        } else {
            return redirect()->route('mi_perfil');
        }
    }

    public function addProductos(Request $request)
    {
        $user = Auth::guard('user')->user();
        $participation = Score::where('user_id', $user->id)->where('id', $request->idPartida)->first();

        if (!$participation) {
            return response()->json(['Response' => 'No se encontró la participación'], 404);
        } else {
            $row = new AddPoints();
            $row->user_id = $user->id;
            $row->score_id = $participation->id;
            $row->image_id = $request->id;
            $row->save();
            return response()->json(['Response' => $row->id]);
        }
    }

    public function game_store_start(GameRequest $request)
    {

        $user = Auth::guard('user')->user();
        $participation = Participation::where('user_id', $user->id)->latest()->first();
        $now = Carbon::now();

        $vidas = Score::where('user_id', $user->id)->where('participation_id', $participation->id)->count();

        if ($vidas >= 3) {
            return response()->json(['Response' => 'Has superado el número de intentos'], 403);
        } else {
            $row = new Score();
            $row->user_id = $user->id;
            $row->participation_id = $participation->id;
            $row->start = $now->format('Y-m-d H:i:s.u');
            $row->score = 0;
            $row->save();
            return response()->json(['Response' => $row->id]);
        }
    }

    public function game_store_end(GameRequest $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'score' => 'required|integer',
        ]);

        $now = Carbon::now();
        $score = Score::find($request->id);
        $score->end = $now->format('Y-m-d H:i:s.u');
        $score->score = $request->score;
        $score->save();

        return response()->json(['response' => 200]);
    }
}


// L8061206:09CADJUN