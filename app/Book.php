<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  use Sluggable;

  protected $fillable = ['name', 'price', 'stock', 'description', 'category_id', 'editorial_id', 'imagen_id'];

  

  //relaciones
  public function category()
  {
    return $this->belongsTo('App\Category');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function images()
  {
    return $this->hasMany('App\Image');
  }

  //scopes
  public function scopeVisibles($query)
  {
    $query->where('visible', 1);
  }
}
