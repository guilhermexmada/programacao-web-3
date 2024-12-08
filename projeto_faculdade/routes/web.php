<?php

use App\Http\Controllers\AlunosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'oi';
});

Route::get('/home', function(){
    return view('home');
})->name('home');


//rota via controlador 
Route::get('/alunos', [AlunosController::class, 'index'])->name('alunos.index');

Route::get('alunos/cadastro', [AlunosController::class, 'cadastrar'])->name('alunos.cadastrar');
Route::get('alunos/lista', [AlunosController::class, 'listar'])->name('alunos.listar');
Route::post('alunos/inserir', [AlunosController::class, 'inserir'])->name('alunos.inserir');