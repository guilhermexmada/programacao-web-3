<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

//rota simples para página Home
Route::get("/home", function () {
    return view("home");
});

//rota simples para página sobre nós
Route::get("/about", function () {
    return view("sobrenos");
});

//rota via controlador dos clientes para cadastro
Route::get("/signup", [ClienteController::class, "index"])->name("index");

//rota via controlador dos clientes para login
Route::get("/login", [ClienteController::class, "login"])->name("login");

//agrupamento de três rotas para páginas de administração
Route::prefix("admin")->group(function () {
    //rota para página de visualização de usuários
    Route::get("/visualizacao/{nome}/{idade?}", function ($nome, $idade = null) {
        return "<h1>Visualize as informações do usuário " . $nome . " : </h1><p> 
        Idade: " . $idade . "</p>";
    })->name("visualizacao");

    //rota para página de exclusão de usuários
    Route::get("/exclusao", function () {
        return view("admin.delete");
    })->name("exclusao");

    //rota para página de edição de usuários
    Route::get("/edicao", function () {
        return view("admin.edit");
    })->name("edicao");
});

Route::get("/about", function () {
    return view("about");
})->name("contatos");

//rota de manutenção
Route::get("/manutencao", function () {
    return view("manutencao"); 
})->name("manutencao");


//função de redirecionamento para página de manuntenção
Route::get("/contatos", function () {
    return redirect()->route("manutencao");
}); 

//Route::redirect("contatos", "manutencao");

//função fallback que joga usuário para página de erro
Route::fallback(function () {
    return view("erro");
});
