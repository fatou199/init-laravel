<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/methode/{userName}', [TestController::class, 'methode1']);

Route::get('/exemple', [TestController::class, 'example']);

Route::get('/structure', [TestController::class, 'structure']);

Route::get('/accueil', [TestController::class, 'accueil']);
Route::post('/articles', [ArticleController::class, 'store']);