<?php

use Illuminate\Support\Facades\Route;
use App\Models\Questao;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/simulados', function () {
    $questoes = Questao::all();
    return view('simulados', compact('questoes'));
});

Route::get('/sajdlaskdj', function () {
    $questoes = Questao::all();
    return view('simulados', compact('questoes'));
});