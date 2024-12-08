<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //redireciona automaticamente para página de cadastro
    public function index(){
        return view("clientes.cadastro");
    }

    //redireciona para página de login
    public function login(){
        return view("clientes.login");
    }
}
