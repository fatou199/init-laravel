<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('users.register');
    }

    public function handleRegistration(User $user, CreateUserRequest $request){

        $user->name = $request->nom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('accueil')->with('success', 'Vous êtes maintenant inscrit');
    }
}
