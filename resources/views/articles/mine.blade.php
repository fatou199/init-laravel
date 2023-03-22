@extends('layouts.app')

@section('page-content')
<div class="row">
    <div class="col-6">
        <ul class="list-group mt-2">
            <h4>Mes articles disponibles</h4>
            @forelse ($myArticles as $article)
                <li class="list-group-item">
                    <a href="{{ route('articles.show', $article->id) }}" class="title">{{ $article->titre }}</a>
                    <div class="description">{{ $article->description }}</div>
                </li>
                @empty
                <p class="text text-info">Aucun article trouvé</p>
            @endforelse
        </ul>
    </div>
</div>
@endsection