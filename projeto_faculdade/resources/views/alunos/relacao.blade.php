<!--extensão/uso do layout principal-->
@extends('layouts.master')

<!--preenchendo título-->
@section('title', 'Alunos')

<!-- preenchendo conteúdo -->
@section('content')
    <div class="container text-center">

        <h1>Relação de estudantes</h1>
        <p></p>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Série</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $aluno)
                <tr>
                    <th scope="row">{{$aluno->id}}</th>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->sobrenome}}</td>
                    <td>{{$aluno->serie}}</td>
                    <td>{{$aluno->telefone}}</td>
                    <td>{{$aluno->endereco}}</td>
                    <td>{{\Carbon\Carbon::parse($aluno->data_nascimento)->age}}</td>
                    <td>
                        <a href=""><i class="fas fa-pencil-alt"></i></a>
                        <a href=""><i class="fas text-danger fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
