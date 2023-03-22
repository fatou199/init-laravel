<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;

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
            'description' => $request->description,
            'user_id' => Auth::id()
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

    // deuxième methode pour recupere un article spécifique
    public function show(Article $article){
        // pas besoin de faire ceci -> $article = Article::find($id);
        // car à travers le (Article $article) il comprend qu'on veut recuperer un article specifique

        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function edit(Article $article){
        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update(Article $article, ArticleRequest $request){
        // $article permet de recuperer l'article dont on souhaite faire la maj
        // $request recupere les données du formulaire

        $article->titre = $request->titre;
        $article->description = $request->description;

        $article->save();

        return redirect('/accueil')->with('success', 'L\'article a été mis à jour');
    }

    public function delete(Article $article){

        $article->delete();
        
        return redirect('/accueil')->with('success', 'L\'article a bien été supprimer');
    }

    public function mine(){
        // ca revient en php a dire select * from article where user_id = 1
        $myArticles = Article::where('user_id', Auth::id())->get();
        return view('articles.mine', [
            'myArticles' => $myArticles 
        ]);
    }
}
