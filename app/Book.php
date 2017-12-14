<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function category() {
  		  return $this->belongsTo(Category::class, 'category_id');
  	}

    public function autors() {
  		  return $this->belongsToMany(Autor::class, 'autor_book', 'book_id', 'autor_id');
    }

    public function image() {
    		return $this->hasOne(Image::class, 'id');
    }

}
