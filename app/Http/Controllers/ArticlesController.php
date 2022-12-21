<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        
        // $articles = [
        //     ['title' => 'titre article 1', 'body' => 'Contenu de l\'article 1'],
        //     ['title' => 'titre article 2', 'body' => 'Contenu de l\'article 2'],
        //     ['title' => 'titre article 3', 'body' => 'Contenu de l\'article 3'],
        // ];
    
        return view('articles.articles', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with('user')->with(['comments' => function ($query) {
            $query->with('user');
        }])->findOrFail($id);

        $article = Article::with(['comments' => function ($query) {
            $query->with('user');
        }])->findOrFail($id);

        return view('articles.show', compact('article'));
    }
}
