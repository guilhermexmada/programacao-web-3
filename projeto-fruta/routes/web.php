<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [UsuarioController::class, 'index']);

Route::get('/home', function() {
    return view('home.index');
});