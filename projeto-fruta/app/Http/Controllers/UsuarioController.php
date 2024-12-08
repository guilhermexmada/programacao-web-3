<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index(){
        $dados_cadastrais = Usuario::all();

        return view('usuario.index',['dados_cadastrais'=>$dados_cadastrais]);
    }
}
