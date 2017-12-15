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
        <h3 style="text-align:center">Detalles de Producto</h3>
      </div>
    </div>

    <div class="w3-container w3-center">
      <h2>Libro: {{ $libro->name }}</h2>
      <img src="/images/{{ $libro->image->src }}" alt="producto">
      <br><br>
      <ul style="list-style:none">
        <p> Descripción: {{ $libro->description }}</p>
    		<li>Rating: {{ $libro->name }}</li>
    		<li>Premios: {{ $libro->description }}</li>
    		<li>Precio $: {{ $libro->price }}</li>
    		<li>Categoría: {{ $libro->category->name }}</li>
    		<li>
    			Autores:
    			@if (count($libro->autors) > 0)
    				<ul style="list-style:none">
    					@foreach ($libro->autors as $autor)
    						<li>{{ $autor->name }}</li>
    					@endforeach
    				</ul>
    			@else
    				<b>Sin autores asociados</b>
    			@endif
    		</li>
    	</ul>
    	<a href="{{ route('libros.index') }}" class="button">volver al listado</a>
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

@endsection
