@extends('layouts/app')

@section('page-content')
<div class="card mt-3">
    <div class="card-body">
        <a href="/accueil">retour</a>
        <div class="title">{{ $article->titre }}</div>
        <p>{{ $article->description }}</p>
    </div>
    <div class="card-footer">
        <a href="/articles/{{ $article->id }}/edit" class="btn btn-info">Editer</a>

        <form action="/articles/{{ $article->id }}/delete" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
</div>


@endsection