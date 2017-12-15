@extends('navbar')
@section('title') <title>Categorias List</title>
@section('content')

  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
    @include('sidebar')
  </div>

  <div class="w3-main" style="margin-left:200px">
  <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
    <div class="w3-container">
      <h2>Catalogo de LongStory</h2>
    </div>
  </div>

  <div class="w3-container">

  <p><a href="{{ route('libros.create') }}" class="button">Nuevo</a></p>

  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey">
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th colspan="3">&nbsp;</th>
      </tr>
    </thead>
    @foreach ($libros as $libro)

      <tr>
        <td>{{ $libro->name }}</td>
        <td>{{ $libro->description }}</td>
        <td>{{ $libro->price }}</td>
        <td>
          <a href="{{ route('libros.show', $libro->id) }}">Ver</a>
        </td>
        <td>editar</td>
        <td>borrar</td>
      </tr>
    @endforeach
  </table>
  </div>

  </div>

  <script>
  function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
  }
  function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
  }
  </script>

{{-- -------------------------------------------------- --}}


@endsection
