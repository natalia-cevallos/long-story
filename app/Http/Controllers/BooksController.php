<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $libros = Book::all();
  return view('book.index', compact('libros'));
      //
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
        $libro = Book::findOrFail($id);
        return view('book.show',compact('libro'));
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function edit(Book $book)
  {
      //
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Book $book)
  {
      //
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Book  $book
   * @return \Illuminate\Http\Response
   */
  public function destroy(Book $book)
  {
      //
  }
}
