<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    //
    public function index()
    {

        return view('alunos.index');
    }

    public function cadastrar()
    {
        return view('alunos.cadastrar');
    }

    public function listar()
    {
        $alunos =  Aluno::all();
        return view('alunos.relacao', ['alunos' => $alunos]);
    }

    public function inserir(Request $request)
    {
        
        //validando dados
        $validateData = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'escola' => 'required|string|max:255',
            'serie' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
        ]);
        //criando novo registro
        Aluno::create($validateData);
        //redirecionando 
        
        return redirect()->route('alunos.cadastrar')->with('success', 'Aluno cadastrado com sucesso!');
   
        }
}
