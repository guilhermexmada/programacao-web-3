<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('motos')}}">Sala de Aula</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('alunos')}}">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('professores')}}">Professores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}">Coordenação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Administração</a>
                </li>
            </ul>
        </div>
    </div>
</nav>