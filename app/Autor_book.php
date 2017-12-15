<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor_book extends Model
{
  protected $table = 'autor_book';
  protected $fillable = ['autor_id', 'book_id'];
}
