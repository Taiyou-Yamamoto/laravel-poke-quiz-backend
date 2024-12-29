<?php

use App\Http\Controllers\ScoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::get('get/{id}', [ScoreController::class, 'get']);
Route::post('post', [ScoreController::class, 'post']);
