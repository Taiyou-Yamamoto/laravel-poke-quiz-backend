<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function post(Request $request){
        $validated = $request->validate([
            'calculatedScore' => 'required|integer',
            'quiz_id' => 'required|integer|min:0|'
        ]);
        Score::create([
            'quiz_id' => $validated['quiz_id'],
            'score' => $validated['calculatedScore'],
        ]);

    }

    public function get(){
        $responseData = [
            'quiz1' => Score::where('quiz_id', 1)->orderByDesc('score')->take(10)->get(),
            'quiz2' =>Score::where('quiz_id', 2)->orderByDesc('score')->take(10)->get(),
            'quiz3' => Score::where('quiz_id', 3)->orderByDesc('score')->take(10)->get(),
        ];
        return  response()->json($responseData);     
    }
}
