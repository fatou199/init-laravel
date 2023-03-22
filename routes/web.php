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

Route::get('/accueil', [ArticleController::class, 'index'])->name('accueil');


Route::middleware(['guest'])->group(function(){

    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'handleRegistration'])->name('register');
    
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'handleLogin'])->name('login');
});


Route::middleware(['auth'])->group(function(){
    Route::prefix('articles')->group(function() {
        Route::post('/', [ArticleController::class, 'store'])
            ->name('articles');

        Route::get('/{article}', [ArticleController::class, 'show'])
            ->name('articles.show')->withoutMiddleware('auth');

        Route::get('/{article}/edit', [ArticleController::class, 'edit'])
            ->name('articles.edit');

        Route::put('/{article}/update', [ArticleController::class, 'update'])
            ->name('articles.update');

        Route::delete('/{article}/delete', [ArticleController::class, 'delete'])
            ->name('articles.delete'); 
        
    });
    
    Route::get('/home', [UserController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('/mine', [ArticleController::class, 'mine'])
    ->name('articles.mine');
});
 