<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
  public function mandarAVista()
  {
    return view('preguntas');
  }
  public function mandaraInicio()
  {
    return view("index");
  }
}
