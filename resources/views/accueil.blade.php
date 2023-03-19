@extends('layouts.app')

@section('page-content')
<form action="/accueil" method="POST">
    @method('post')
    {{-- proteger les données --}}
    @csrf
    <input type="text" placeholder="Nom" name="nom">

    <input type="email"  placeholder="Email" name="email">

    <button type="submit" name="btn_submit">Valider</button>
</form>
@endsection