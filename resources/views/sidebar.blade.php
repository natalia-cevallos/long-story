@php

use App\Categoria;
$categorias = App\Category::all();
// foreach ($categorias as $categoria) {
//     echo $categoria->name; }
@endphp
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- <div class="w3-container"> --}}
 {{-- Horizontal Bar --}}
      <a href="{{ route('index') }}" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
      <a href="{{ route('libros.index') }}" class="w3-bar-item w3-button w3-black">Catalogo</a>
      <a href="{{ route('libros.index') }}" class="w3-bar-item w3-button w3-black">Recomendados</a>
      <a href="{{ route('libros.index') }}" class="w3-bar-item w3-button w3-black">Autores</a>
      <div class="w3-dropdown-hover">
      <button class="w3-button w3-black"><a href="#') }}">Temas</a></button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        @foreach ($categorias as $categoria)
            <a href="#" class="w3-bar-item w3-button">{{ $categoria->name }}</a>
        @endforeach
      </div>
      </div>
      <div class="w3-dropdown-hover">
      <button class="w3-button w3-black">Editoriales</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
      </div>
      </div>
      <input type="text" class="w3-bar-item w3-input" placeholder="Buscar..">
    </div>


    <script>
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
    }
    </script>
