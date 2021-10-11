<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends BaseModel
{
    use HasFactory;

    protected $table = 'article_category';

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }

}
