<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $items = Article::all();
        return view('articles.index', compact('items'));
    }
}
