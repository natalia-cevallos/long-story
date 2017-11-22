@extends('navbar')
@section('title') <title>Registro</title>
@section('content')
  @php
  $sexos = [
'F' => 'Femenino',
'M' => 'Masculino',
'O'=>'Otro'
];
  @endphp
    <form method="post" class="form-register" action="{{ route('register') }}">
      {{ csrf_field() }}
				<h2 class="form-titulo"> CREA UNA CUENTA </h2>
				<div class="contenedor-inputs{{ $errors->has('name') ? ' has-error' : '' }}">
					<div class="unInput">
						<input id="name" type="text" name="name" placeholder="Nombre" class="input-48" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
             @endif
					</div>

					<div class="unInput{{ $errors->has('apellido') ? ' has-error' : '' }}">
						<input id="apellido" type="text" name="apellido" placeholder="Apellido" class="input-48" value="{{ old('apellido') }}" required autofocus>
            @if ($errors->has('apellido'))
              <span class="help-block">
                <strong>{{ $errors->first('apellido') }}</strong>
              </span>
             @endif
					</div>

					<div class="unInput lg{{ $errors->has('email') ? ' has-error' : '' }}">
						<input id="email" type="text" name="email" placeholder="Correo Electronico" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
					</div>

					<div class="unInput lg{{ $errors->has('username') ? ' has-error' : '' }}">
						<input id="username" type="text" name="username" placeholder="Usuario" value="{{ old('username') }}" required>
            @if ($errors->has('username'))
              <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
              </span>
            @endif
					</div>

					<div class="unInput lg{{ $errors->has('password') ? ' has-error' : '' }}">
						<input id="password" type="password" name="password" placeholder="Contraseña" required>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
					</div>

					<div class="unInput lg">
						<input id="password-confirm" type="password" placeholder="Repetir Contraseña" name="password_confirmation" required>
					</div>

					<input type="submit" value="Registrar" class="btn-enviar">
					<p class="form-link"> ¿Ya tienes una cuenta? <a href="login.php"> Ingresa aquí </a></p>
				</div>
		</form>
@endsection
