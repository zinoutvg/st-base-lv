<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img
              src="https://soft.conoce.com.pe/wp-content/uploads/2020/09/logo_titulo_prevencion_riesgos_03.png"
              alt=""
              width="auto"
              height="auto"
            >
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarLinks"
            aria-controls="navbarLinks"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarLinks">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Inicio</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Matriz</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Scoring</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Registro Operaciones</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Canal denuncias</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Listas</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Cursos</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    @yield('content')

    <footer>
      <!-- Bootstrap -->
      <script src="{{ asset('js/app.js') }}" defer></script>
    </footer>
  </body>
</html>