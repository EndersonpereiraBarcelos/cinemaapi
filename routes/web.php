<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/agendamento', function () {
    return view('agendamento');
});

Route::get('/programacao', function () {
    return view('programacao');
});

Route::get('/sala', function () {
    return view('saida');
});
