<!--extensão/uso do layout principal-->
@extends('layouts.master')

<!--preenchendo título-->
@section('title', 'Alunos')

<!-- preenchendo conteúdo -->
@section('content')
    <div class="container text-center">

        @php 
            $img = 'images/faculdade_1.jpg'
        @endphp

        <img width="50%" class="figure-img img-fluid rounded" src="{{ asset($img) }}">
        <figcaption class="figure-caption">Formando profissionais há mais de 20 anos.</figcaption>


        <h1 style="margin: 50px">Uma nova porta para o Ensino Superior no Brasil</h1>
        <p style="margin: 50px">A Formar é uma startup inovadora que se dedica a facilitar o ingresso no ensino superior no
            Brasil. Com uma visão
            audaciosa e uma missão clara, a Formar trabalha diariamente para tornar a jornada acadêmica mais acessível e
            eficiente para todos. Com uma equipe de profissionais altamente qualificados e uma abordagem personalizada, a
            Formar oferece soluções integradas que abrangem desde a preparação para provas até a orientação na seleção de
            cursos. Com a Formar, você está a caminho para uma experiência de ensino superior transformadora.
        </p>
    </div>
@endsection
