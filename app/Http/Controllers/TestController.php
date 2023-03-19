<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function methode1(){
        return 'Ceci est la methode 1';
    }

    public function example(){
        return 'Ceci est un example';
    } 
}
