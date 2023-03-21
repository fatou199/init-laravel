@extends('layouts.app')

@section('page-content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('register')}}" method="POST" class="form-product">
                        @method('post')
                        @csrf
                
                        <h4>Nouvel utilisateur</h4>
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" class="form-control mt-1" placeholder="Nom" name="nom" value={{old('nom')}}>
                                @error('nom')
                                    <div class="text text-danger">
                                        {{ $message }}
                                    </div> 
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control mt-1" placeholder="Email" name="email" value={{old('email')}}>
                                @error('email')
                                    <div class="text text-danger">
                                        {{ $message }}
                                    </div> 
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Mot de passe</label>
                                <input type="password" class="form-control mt-1" name="password" >
                                @error('password')
                                    <div class="text text-danger">
                                        {{ $message }}
                                    </div> 
                                @enderror
                            </div>
                        
                        <button class="btn btn-success" type="submit">Inscription</button>
                    </form>
                    <p class="mt-3">Deja un compte ? <a href="">Connecter-vous</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection