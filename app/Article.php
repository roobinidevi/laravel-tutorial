<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = [
        'title', 'description', 'short_des',
    ];

    public function article_images() {
        return $this->hasMany(ArticleImage::class);
    }

}
