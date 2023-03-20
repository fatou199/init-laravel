@extends('layouts.app')

@section('page-content')


<div class="card mt-2">
    <div class="card-body">

        {{-- la gestion des erreurs --}}
        {{-- $errors est une variable globale de laravel --}}
        {{-- @if ($errors)
            @foreach ($errors->all() as $error)
                <div class="alert alert-info">{{ $error }}</div>
            @endforeach
        @endif   --}}

        <form action="/articles" method="POST" class="form-product">
            @method('post')
            @csrf
            {{-- csrf génère automatiquement un “jeton” --}}
            {{-- proteger les données --}}
            {{-- inclure un champs caché de jeton CSRF pour permettre au middleware de protection CSRF de valider la requête --}}
            {{-- https://devdocs-fr.github.io/laravel/7.x/csrf.html --}}
        
            <h4>Enregistrer un article</h4>
            <div class="form-group">
                <label for="">Titre</label>
                <input type="text" class="form-control" placeholder="Titre de l'article" name="titre" value={{old('titre')}}>
                @error('titre')
                   <div class="text text-danger">
                    {{ $message }}
                    </div> 
                @enderror
            </div>

            {{-- le old permet de conserver la valeur en cas d'erreur de validation --}}
            {{-- <input type="email" class="form-control" placeholder="Email" name="email" value={{old('email')}}> --}}
        
            <button class="btn btn-success" type="submit">Ajouter</button>
        </form>
    </div>
</div>


@endsection