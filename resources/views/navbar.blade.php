
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="images/libro-icono-MRK-2.ico">
    <title>@yield('title')</title>
  </head>
  <body>
      <header>
        <div class="contenedor">
          <h1 class="icon-book"> Long story </h1>
          <input type="checkbox" id="menu-bar">
          <label class="icon-menu" for="menu-bar"></label>
          <nav class="menu">
            <a href="{{ route('index') }}"> Inicio </a>
            <a href="{{ route('preguntas') }}"> Preguntas</a>
            @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
          @else
            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
          @endguest
          </nav>
        </div>
      </header>

         <section id="banner">
        <img src="images/banner2.jpg" >
          <div class="contenedor">
            <h2> Long story | Tu librería online</h2>
            <p> ¿Cuál es tu libro favorito?</p>
            <a href="#"> Leer más </a>
          </div>
        </section>
        @yield('content')

        <footer>
          <div class="contenedor">
            <p class="copy"> Long story &copy; 2017 </p>
            <div class="sociales">
              <a class="icon-facebook" href="#"></a>
              <a class="icon-twitter" href="#"></a>
              <a class="icon-instagram" href="#"></a>
              <a class="icon-googleplus" href="#"></a>
            </div>
          </div>
        </footer>

    </body>
  </html>
