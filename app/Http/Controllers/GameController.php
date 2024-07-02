<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use App\Models\ParticipationDay;
use App\Models\Score;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index()
    {
        return view('game.index');
    }

    public function game_store_user(GameRequest $request)
    {
        $participation_id = session('participation_id');

        $user = Auth::user();
        $participation_day = ParticipationDay::where('date', Carbon::now()->format('Y-m-d'))->first();

        // Si la variable esta vacia lo mandamos a el perfil
        if (empty($participation_id)) {
            return redirect()->route('user.profile');
        }

        // En el caso que se no se encuentre dentro del horario de participacion se notifica al usuario
        if (!$participation_day->is_in_schedule()) {
            return redirect()->back()->withErrors(['fail' => 'El horario de participación ha terminado']);
        }

        Score::create([
            'user_id'               => $user->id,
            'participation_id'      => $participation_id,
            'time'                  => $request->time,
            'score'                 => $request->score,
        ]);
    }

    public function saveScore(Request $request)
    {
        $request->validate([
            'score' => 'required|integer',
        ]);

        Score::create([
            'score' => $request->score,
        ]);

        return response()->json(['message' => 'Score saved successfully']);
    }
}
