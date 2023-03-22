<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\CreateUserRequest;

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

    public function login(){
        return view('users.login');
    }

    public function handleLogin(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        // si un élément de notre table correspond à les données saisi dans le formualire login
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('home');
        } else {
            return redirect()->back()->with('error', 'Informations de connexion non reconnue.');

        }
    }

    public function dashboard(){
        return view('dashboard');
    }
}
