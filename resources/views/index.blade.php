@extends('navbar')
@section('title') <title>Inicio</title>
@section('content')
  <main>
       <section id="quienessomos">
           <h2> BIENVENIDOS A LONG STORY | ARGENTINA </h2>
           <p class="bienvenido"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
             nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
             reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
         </section>

         

         <section id= "info">
           <h3> Algunos autores reconocidos en Latinoamérica </h3>
           <div class="contenedor">
             <div class="info-autores">
               <img src="images/autor1.jpg" >
               <h4> Lauren Kate </h4>
             </div>
             <div class="info-autores">
               <img src="images/autor2.jpg" >
               <h4> Maximilia Rodrigez </h4>
             </div>
             <div class="info-autores">
               <img src="images/autor3.jpg" >
               <h4> Tomas Aguirre </h4>
             </div>
             <div class="info-autores">
               <img src="images/autor4.jpg" alt="" >
               <h4> Facundo Esperanza </h4>
             </div>
           </div>
         </section>
  </main>

@endsection
