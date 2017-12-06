@extends('navbar')
@section('title') <title>Perfil de Usuario</title>
@section('content')
<div class="form-register">
  <div class="panel-body">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    {{ Auth::user()->username }}
    <br>
    {{ Auth::user()->name }}
    <br>
    {{ Auth::user()->apellido }}
    <br>
    {{ Auth::user()->email }}
  </div>
    <br><br>
    <a href="{{ url('/profile') }}" class="form-titulo">Editar Usuario</a>
</div>
<br><br>
@endsection
