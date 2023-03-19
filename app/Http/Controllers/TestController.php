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

    // une autre maniere de faire avec compact
    // public function accueil(){
    //     $name = 'Fatou';    
    //     $numeros = ['1','2','3','4','5'];          
    //     $age = 16;           
    //     $product = 'meuble';    
    //     return view('accueil', compact('name', 'age', 'product', 'numeros'));
    // }

    public function accueil(){
        $userName = 'Fatou';    
        $numeros = ['1','2','3','4','5'];            
        return view('accueil',[
            'name' => $userName, 
            'age' => 16, 
            'product' => 'meuble', 
            'numeros' => $numeros,
        ]);
    }
}
