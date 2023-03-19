<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormRequest;
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
    // public function structure(){
    //     $name = 'Fatou';    
    //     $numeros = ['1','2','3','4','5'];          
    //     $age = 16;           
    //     $product = 'meuble';    
    //     return view('structure', compact('name', 'age', 'product', 'numeros'));
    // }

    public function structure(){
        $userName = 'Fatou';    
        $numeros = ['1','2','3','4','5'];            
        return view('structure',[
            'name' => $userName, 
            'age' => 16, 
            'product' => 'meuble', 
            'numeros' => $numeros,
        ]);
    }

    public function accueil(){
        return view('accueil');
    }

    public function store(ValidateFormRequest $request){
        //  dd($request);

        $verif = $request;

        if ($verif) {
            echo 'Vérification passée';
        } else{
            return redirect()->back();
        }

          
    }
}
