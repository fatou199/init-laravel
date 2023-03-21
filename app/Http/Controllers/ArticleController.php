<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{

    public function index(){   
        $articles = Article::all();
        
        return view('accueil',[
            'articles' => $articles
        ]);
    }


    public function store(Article $article, ArticleRequest $request){
         Article::create([
            'titre' => $request->titre,
            'description' => $request->description
         ]);

         return redirect()->back()->with('success', 'L\'article a bel et bien été enregistrer');
    }
}
