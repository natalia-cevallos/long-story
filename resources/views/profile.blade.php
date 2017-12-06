@extends('navbar')
@section('title') <title>Editar: Perfil de Usuario</title>
@section('content')
<div class="form-register">
    <div class="panel-body">
            <img src="{{ Auth::user()->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }} </h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Subir Foto de Perfil</label>
                <input type="file" name="avatar" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br><br>
                <input type="submit" class="btn-enviar">
            </form>
    </div>
</div>
<br><br>
@endsection
