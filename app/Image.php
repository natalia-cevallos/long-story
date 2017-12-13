<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $fillable = ['src'];

  public function book()
  {
    return $this->belongsTo('App\Book');
  }
}
