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
    <form method="post" name="registro" class="form-register" action="{{ route('register') }}">
      {{ csrf_field() }}
				<h2 class="form-titulo"> CREA UNA CUENTA </h2>
				<div class="contenedor-inputs{{ $errors->has('name') ? ' has-error' : '' }}">

          <div class="unInput lg">
						<input id="name" type="text" name="name" placeholder="Nombre" class="input-48" value="{{ old('name') }}" >
            @if ($errors->has('name'))
              <span class="help-block">
                <strong class="error">{{ $errors->first('name') }}</strong>
              </span>
             @endif
					</div>

					<div class="unInput lg{{ $errors->has('apellido') ? ' has-error' : '' }}">
						<input id="apellido" type="text" name="apellido" placeholder="Apellido" class="input-48" value="{{ old('apellido') }}" >
            @if ($errors->has('apellido'))
              <span class="help-block">
                <strong class="error">{{ $errors->first('apellido') }}</strong>
              </span>
             @endif
					</div>

					<div class="unInput lg{{ $errors->has('email') ? ' has-error' : '' }}">
						<input id="email" type="text" name="email" placeholder="Correo Electronico" value="{{ old('email') }}" >
            @if ($errors->has('email'))
              <span class="help-block">
                <strong class="error">{{ $errors->first('email') }}</strong>
              </span>
            @endif
					</div>
					<div class="unInput lg{{ $errors->has('username') ? ' has-error' : '' }}">
						<input id="username" type="text" name="username" placeholder="Usuario" value="{{ old('username') }}" >
            @if ($errors->has('username'))
              <span class="help-block">
                <strong class="error">{{ $errors->first('username') }}</strong>
              </span>
            @endif
					</div>

					<div class="unInput lg{{ $errors->has('password') ? ' has-error' : '' }}">
						<input id="password" type="password" name="password" placeholder="Contraseña" >
            @if ($errors->has('password'))
              <span class="help-block">
                <strong class="error">{{ $errors->first('password') }}</strong>
              </span>
            @endif
					</div>

					<div class="unInput lg">
						<input id="password-confirm" type="password" placeholder="Repetir Contraseña" name="password_confirmation" >
					</div>

      <div class="unInput lg">
        <select name="pais" id="country">

        </select>
			</div>

      <div class="unInput lg">
        <select id="provincias">

        </select>
      </div>



					<input type="submit" value="Registrar" class="btn-enviar">
					<p class="form-link"> ¿Ya tienes una cuenta? <a href="login.php"> Ingresa aquí </a></p>
				</div>
		</form>

    <script src="{{URL::asset('js/register.js') }}"></script>
    <script src="{{URL::asset('js/validregistro.js') }}"></script>
@endsection
