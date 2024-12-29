<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function post(Request $request){
        $validated = $request->validate([
            'calculatedScore' => 'require|integer',
            'quiz_id' => 'require|integer|min:0|'
        ]);
        Score::create($validated);
    }
}
