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
<div class="container">
  <h2 class="form-titulo"> CREA UNA CUENTA </h2>
   <div class="contenedor-inputs">
     <form class="form-register" method="POST" action="{{ route('register') }}">
       {{ csrf_field() }}
       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
         <label for="name" class="col-md-4 control-label">Name</label>
         <div class="unInput">
           <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
           @if ($errors->has('name'))
             <span class="help-block">
               <strong>{{ $errors->first('name') }}</strong>
             </span>
            @endif
          </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>
          <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-4 control-label">Password</label>
          <div class="unInput lg">
            <input id="password" type="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="unInput lg">
          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
          <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn-enviar">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>

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
						<input id="email" type="text" name="email" placeholder="Correo Electronico" value="{{ old('email') }}">
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
					</div>

					<div class="unInput lg{{ $errors->has('username') ? ' has-error' : '' }}">
						<input type="text" name="username" placeholder="Usuario" value="{{ old('username') }}">
            @if ($errors->has('username'))
              <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
              </span>
            @endif
					</div>

					<div class="unInput lg">
						<input id="password" type="password" name="pass" placeholder="Contraseña" required>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
					</div>

					<div class="unInput lg">
						<input id="password-confirm" type="password" placeholder="Repetir Contraseña" name="password_confirmation" required>
					</div>

          <div class="unInput">
						<select name="sexo">
							<option value="">Indicar Sexo</option>
							<?php foreach ($sexos as $letra => $valor): ?>
								<?php if (isset($_POST['sexo']) && $_POST['sexo'] == $letra): ?>
									<option selected value="<?=$letra;?>"><?=$valor;?></option>
								<?php else: ?>
									<option value="<?=$letra;?>"><?=$valor;?></option>
								<?php endif; ?>
							<?php endforeach; ?>
						</select>
						<?php if (isset($erroresFinales['sexo'])): ?>
							<span class="error"><?=$erroresFinales['sexo'];?></span>
						<?php endif; ?>
					</div>

					<div class="unInput">
						<input type="file" name="avatar">
						<?php if (isset($erroresFinales['imagen'])): ?>
							<span class="error"><?=$erroresFinales['imagen'];?></span>
						<?php endif; ?>
					</div>



					<input type="submit" value="Registrar" class="btn-enviar">
					<p class="form-link"> ¿Ya tienes una cuenta? <a href="login.php"> Ingresa aquí </a></p>
				</div>
		</form>
@endsection
