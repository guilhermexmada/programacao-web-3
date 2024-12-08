<?php

use App\Http\Controllers\CursosController;
use Illuminate\Support\Facades\Route;

//rota simples para página principal
Route::get('/', function () {
    return 'Seja bem vindo!- ROTA RAIZ ( / )';
});

//rota simples para página de alunos
Route::get('/alunos', function () {
    return 'Consulte aqui os nossos alunos';
});

//rota simples para página de professores
Route::get('/professores', function () {
    return 'Consulte aqui os nossos professores';
});

//rota simples para página de cursos
/*
Route::get('/cursos', function(){
    return view('cursos');
});
*/

//rota via controlador para página de cursos
Route::get('/cursos/{nome?}', [CursosController::class, "index"])->name('site.cursos');

//rota simples para página de contato usando parâmetros obrigatórios
Route::get('/contatos/{nome}/{curso}/{idade}', function (string $nome = null, $curso = null, $idade = null) {
    echo "Fale conosco " . $nome . "! Nós atendemos por: <br>";
    echo "Você está cursando " . $curso . " aos " . $idade . " anos. ";
});

//agrupando rotas em uma rota adm
Route::prefix('adm')->group(function () {

    Route::get('/clientes', function () {
        return view('clientes');
    })->name('adm.clientes');

   Route::get('/fornecedores', function () {
        return view('fornecedores');
    })->name('adm.fornecedores');

    Route::get('/produtos', function () {
        return view('produtos');
    })->name('adm.produtos');

});


Route::get('/rota1', function () {
    return 'rota1';
});

Route::get('/rota2', function () {
    return 'rota2';
});

//redirecionamento de rotas (acesso, redirecionamento)
Route::redirect('rota1', 'rota2');

//rota de callback redireciona usuário quando nenhuma página é encontrada
Route::fallback(function (){
    return 'Página não encontrada! Clique aqui para retornar para Home';
});
