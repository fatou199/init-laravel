@extends('layouts.app')

@section('page-content')

{{-- la gestion des erreurs --}}
{{-- $errors est une variable globale de laravel --}}
@if ($errors)
    @error('nom')
        <p>Le champs nom est requis</p>
    @enderror
    @error('email')
        <p>Le champs email est requis</p>
    @enderror
@endif  


<form action="/accueil" method="POST">
    @method('post')
    @csrf
    {{-- csrf génère automatiquement un “jeton” --}}
    {{-- proteger les données --}}
    {{-- inclure un champs caché de jeton CSRF pour permettre au middleware de protection CSRF de valider la requête --}}
    {{-- https://devdocs-fr.github.io/laravel/7.x/csrf.html --}}

    <input type="text" placeholder="Nom" name="nom" value={{old('nom')}}>
    {{-- le old permet de conserver la valeur en cas d'erreur de validation --}}
    <input type="email"  placeholder="Email" name="email" value={{old('email')}}>

    <button type="submit">Valider</button>
</form>


@endsection