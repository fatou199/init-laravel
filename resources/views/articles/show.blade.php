@extends('layouts/app')

@section('page-content')
<div class="card mt-3">
    <div class="card-body">
        <a href="/accueil">retour</a>
        <div class="title">{{ $article->titre }}</div>
        <p>{{ $article->description }}</p>
    </div>
    <div class="card-footer">
        <a href="/articles/{{ $article->id }}/edit">Editer</a>
        <button class="btn btn-danger">Supprimer</button>
    </div>
</div>


@endsection