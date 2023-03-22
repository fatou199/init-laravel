@extends('layouts/app')

@section('page-content')
<div class="card mt-3">
    <div class="card-body">
        <a href="/accueil" class="btn btn-primary mb-2">retour</a>
        <div class="title">{{ $article->titre }}</div>
        <p>{{ $article->description }}</p>
    </div>
    @auth
    @if (Auth::user()->id == $article->user_id)
        <div class="card-footer">
            <div class="row">
                <div class="col-1">
                    <a href="{{ route('articles.edit', $article->id )}}" class="btn btn-info">Editer</a>
                </div>
                <div class="col-1">
                    <form action="{{ route('articles.delete', $article->id )}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
        
    @endauth
</div>


@endsection