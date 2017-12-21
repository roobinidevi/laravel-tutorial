<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    protected $guarded = [];
    
    public function articles()
  {
    return $this->belongsTo(Article::class);
  }
}
