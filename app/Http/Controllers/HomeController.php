<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('home.index', compact('articles'));
    }

    public function show(Article $article) {
        
        return view('home.show', compact('article'));
    }


}
