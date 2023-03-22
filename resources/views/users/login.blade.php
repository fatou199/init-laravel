@extends('layouts.app')

@section('page-content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">

                    @if (session()->has('error'))
                        <div class="alert alert-danger">{{ session()->get('error') }}</div>
                    @endif 

                    <form action="{{route('login')}}" method="POST" class="form-product">
                        @method('post')
                        @csrf
                
                        <h4>Page de connexion</h4>
                            
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control mt-1" name="email" value={{old('email')}}>
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
                        
                        <button class="btn btn-success" type="submit">Connexion</button>
                    </form>
                    <p class="mt-3">Ancun compte ? <a href="{{route('register')}}">Inscrivez-vous</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection