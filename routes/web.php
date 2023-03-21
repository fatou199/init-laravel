<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'handleRegistration'])->name('register');


// Route::get('/methode/{userName}', [TestController::class, 'methode1']);

// Route::get('/exemple', [TestController::class, 'example']);

// Route::get('/structure', [TestController::class, 'structure']);

Route::get('/accueil', [ArticleController::class, 'index'])->name('accueil');
// Route::get('/articles/{id}', [ArticleController::class, 'show']);

// deuxième méthode pour afficher les details d'un article
//{article} est le nom qu'on passe dans le controleur
// Route::get('/articles/{article}', [ArticleController::class, 'show']);


Route::prefix('articles')->group(function() {
    Route::post('/', [ArticleController::class, 'store'])->name('articles');
    Route::get('/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete'); 
});
