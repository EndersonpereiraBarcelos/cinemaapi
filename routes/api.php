<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cinema', [ApiController::class, 'AllCinema']);
Route::post('cinema', [ApiController::class, 'CreateCinema']);
Route::put('cinema/{id}', [ApiController::class, 'UpdateCinema']);
Route::get('cinema/{id}', [ApiController::class, 'IDCinema']);
Route::delete('cinema/{id}', [ApiController::class, 'DeleteCinema']);
