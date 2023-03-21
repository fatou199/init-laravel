@extends('layouts.app')

@section('page-content')
<div class="row mt-2">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card mt-3">
            <div class="card-body">
                <h4>Editer un article</h4>
                <form action="{{ route('articles.update', $article->id )}}" method="POST">
                    @csrf
                    @method('put')

                    <input type="text" name="titre" class="form-control" value="{{ $article->titre }}">

                    <textarea name="description" id="" cols="30" rows="10" class="form-control mt-1"> {{ $article->description }}</textarea>

                    <div class="buttons">
                        <button class="btn btn-success mt-1" type="submit">Actualiser</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
@endsection