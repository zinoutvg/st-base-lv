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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img
              src="https://soft.conoce.com.pe/wp-content/uploads/2020/09/logo_titulo_prevencion_riesgos_03.png"
              alt=""
              width="auto"
              height="auto"
            >
          </a>

          <div>
            <a href="#">Inicio</a>
            <a href="#">Matriz</a>
            <a href="#">Scoring</a>
            <a href="#">Registro Operaciones</a>
            <a href="#">Canal denuncias</a>
            <a href="#">Listas</a>
            <a href="#">Cursos</a>
            <a href="#">Contact</a>
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