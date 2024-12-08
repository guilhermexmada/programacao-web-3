<!--extensão/uso do layout principal-->
@extends('layouts.master')

<!--preenchendo título-->
@section('title', 'Alunos')

<!-- preenchendo conteúdo -->
@section('content')
    <div class="container text-center">
        <img width="50%"  class="figure-img img-fluid rounded" src="{{asset('images/formandos.jpg')}}">
        <figcaption class="figure-caption">Formando profissionais há mais de 20 anos.</figcaption>

        <h1>Alunos</h1>
        <p></p>
    </div>
@endsection
