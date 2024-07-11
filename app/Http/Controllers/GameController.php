<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
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

        if ($week && $week->id == 1) {
            return view('pages.game');
        } else if ($week && $week->id == 2) {
            return view('pages.game_sem_dos');
        }
    }

    public function game_store_start(GameRequest $request)
    {

        $user = Auth::guard('user')->user();
        $participation = Participation::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        $row = new Score();
        $row->user_id = $user->id;
        $row->participation_id = $participation->id;
        $row->start = $now->format('Y-m-d H:i:s.u');
        $row->score = 0;
        $row->save();


        return response()->json(['participacion' => $row->id]);
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