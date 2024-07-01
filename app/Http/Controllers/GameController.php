<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('game.index');
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
