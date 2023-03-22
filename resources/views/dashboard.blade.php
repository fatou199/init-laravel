@extends('layouts.app')

@section('page-content')

<div class="card mt-2 bg-warning">
    <div class="card-body">
        <p>Bienvenue {{ Auth::user()->name }}</p>
    </div>
  </div>

@endsection