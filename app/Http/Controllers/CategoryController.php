<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $list = Article::orderBy('id', 'desc')
            ->where('category_id', $id)->get();


        return view('article', [
            'article' => optional($list)->first(),
            'list' => $list
        ]);
    }
}
