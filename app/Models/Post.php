<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model {
  protected $fillable = ['title','slug','cover_url','excerpt','content','published_at'];

  protected static function booted(){
    static::creating(function($post){
      if (empty($post->slug)) $post->slug = Str::slug($post->title) . '-' . Str::random(5);
    });
  }

  
    protected $casts = [
        'published_at' => 'datetime',
    ];
}
