<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function methode1($userName){
        return 'Bonjour ' . $userName;
    }

    public function example(){
        return 'Ceci est un example';
    } 

    public function accueil(){
        return view('accueil');
    }
}
