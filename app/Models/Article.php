<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends BaseModel
{
    use HasFactory;

    protected $table = 'article';

    public function category()
    {
        return $this->hasOne(ArticleCategory::class, 'id', 'category_id');
    }

}
