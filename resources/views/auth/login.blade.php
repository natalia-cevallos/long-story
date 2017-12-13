@extends('navbar')
@section('title') <title>Login</title>
@section('content')
<br><br><br>
		<form method="post" id="login" class="form-register" action="{{ route('login') }}">
      {{ csrf_field() }}
				<h2 class="form-titulo"> INGRESA </h2>
				<div class="contenedor-inputs{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="unInput lg">
							<input id="email" type="email" name="email" placeholder="Correo" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong class="error">{{ $errors->first('email') }}</strong>
                  </span>
              @endif
					</div>

					<div class="unInput lg{{ $errors->has('password') ? ' has-error' : '' }}">
						<input id="password" type="password" name="password" placeholder="Contraseña" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong class="error">{{ $errors->first('password') }}</strong>
                </span>
            @endif
					</div>


					<div class="unInput lg">
						<input type="submit" value="Entrar" class="btn-enviar">
					</div>

					<div class="container-recordarme">
						<input type="checkbox" name="recordar" {{ old('remember') ? 'checked' : '' }} value="recordar" ><span> Recordarme </span>
					</div>
          <a class="btn btn-link" href="{{ route('password.request') }}">
              Forgot Your Password?
          </a>
					<br><br>
				</div>
				</form>

				<script src="{{URL::asset('js/validlogin.js') }}"></script>

@endsection
