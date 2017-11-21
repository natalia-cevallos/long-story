
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
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
		<?php if (isset($usuario)): ?>
			<a class="button" href="perfil-usuario.php">Mi Perfil</a>
			<a class="button" href="logout.php">Salir</a>
			<a class="button">Hola <?=$usuario["name"];?></a>
      <img src="<?=$laImagen[0];?>" alt="avatar" width="50" height="50" style="border-radius: 50%;">
		<?php else: ?>
            <a href="{{ route('register') }}"> Registro </a>
            <a href="{{ route('login') }}"> Login </a>
		<?php endif; ?>
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
