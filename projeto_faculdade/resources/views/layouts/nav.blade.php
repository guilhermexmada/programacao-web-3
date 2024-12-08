<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img width="50px" style="margin-right: 10px" src="{{asset('images/icone.png')}}">
      <a class="navbar-brand" href="#">Formar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ingresso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bolsas e descontos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Alunos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('alunos.listar')}}">Listar</a></li>
              <li><a class="dropdown-item" href="{{route('alunos.cadastrar')}}">Cadastrar</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>