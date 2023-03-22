@extends('layouts/app')

@section('page-content')
<div class="card mt-3">
    <div class="card-body">
        <a href="/accueil">retour</a>
        <div class="title">{{ $article->titre }}</div>
        <p>{{ $article->description }}</p>
    </div>
    @auth
        <div class="card-footer">
            <a href="{{ route('articles.edit', $article->id )}}" class="btn btn-info">Editer</a>
            
            <form action="{{ route('articles.delete', $article->id )}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    @endauth
</div>


@endsection