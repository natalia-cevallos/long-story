<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
  public function books() {
      return $this->belongsToMany(Book::class, 'autor_book', 'autor_id', 'book_id');
  }
}
