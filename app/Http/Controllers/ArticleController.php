<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    // pour afficher tout les articles
    public function index(){   
        $articles = Article::all();
        
        return view('accueil',[
            'articles' => $articles
        ]);
    }


    // pour creer un article et l'enregistrer dans la bdd
    public function store(Article $article, ArticleRequest $request){
         Article::create([
            'titre' => $request->titre,
            'description' => $request->description
         ]);

         return redirect()->back()->with('success', 'L\'article a bel et bien été enregistrer');
    }

    // pour recuperer un article spécifique
    // public function show($id){
    //     $article = Article::find($id);

    //     return view('articles.show', [
    //         'article' => $article
    //     ]);
    // }

    // deuxième methode pour recupere un article
    public function show(Article $article){
        // pas besoin de faire ceci -> $article = Article::find($id);
        // car à travers le (Article $article) il comprend qu'on veut recuperer un article specifique
        
        return view('articles.show', [
            'article' => $article
        ]);
    }
}
