<!--extensão/uso do layout principal-->
@extends('layouts.master')

<!--preenchendo título-->
@section('title', 'Cadastro')

<!-- preenchendo conteúdo -->
@section('content')
    <div class="container text-center">
        <img width="50%" class="figure-img img-fluid rounded" src="{{ asset('images/formandos.jpg') }}">
        <figcaption class="figure-caption">Formando profissionais há mais de 20 anos.</figcaption>

        <h1 style="margin-top: 50px; margin-bottom: 50px">Cadastro de Estudante</h1>
        <p></p>

        @if(session('success')) 
            <div class="alert alert-success">{{session('success')}}</div>
            @else
            <div class="alert alert-danger">Erro ao cadastrar estudante</div>
        @endif

        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    
                    <form action="{{route('alunos.inserir')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="col">
                                <label for="sobrenome" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="turma" class="form-label">Escola</label>
                            <input type="text" class="form-control" id="turma" name="escola" required>
                        </div>
                        <div class="mb-3">
                            <label for="serie" class="form-label">Série</label>
                            <input type="text" class="form-control" id="serie" name="serie" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" required>
                        </div>
                        <div class="mb-3">
                            <label for="data" class="form-label">Data de nascimento</label>
                            <input type="date" class="form-control" id="data" name="data_nascimento" required>
                        </div>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                        <button type="button" class="btn btn-primary">Limpar</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>


    </div>
@endsection
