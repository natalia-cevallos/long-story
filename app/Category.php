<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['value'];

  public function product()
  {
    return $this->hasMany('App\Book');
  }

  public function scopeVisibles($query)
  {
    $query->where('visible', 1);
  }
}
