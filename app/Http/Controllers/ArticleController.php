<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function store(Article $article, ArticleRequest $request){
         Article::create([
            'titre' => $request->titre
         ]);
    }
}