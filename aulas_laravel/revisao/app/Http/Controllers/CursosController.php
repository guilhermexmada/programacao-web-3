<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //função index que retorna a view cursos + nome do curso e do aluno
    public function index($nome = null){
        $curso = "Desenvolvimento de Sistemas";
        return view('cursos', ['curso' => $curso, 'nome' => $nome]);
    }

    public function compact($nome, $idade){
        $curso = "Administração";
        return view('cursos', compact('curso', 'nome', 'idade'));
    }
}
