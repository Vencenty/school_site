<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $list = Article::orderBy('id', 'desc')->get();


        return view('article', [
            'article' => $article,
            'list' => $list
        ]);
    }
}
