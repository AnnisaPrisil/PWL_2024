<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/ktp', function () {
    return view('ktp');
});


Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', function () {
    return 'Welcome';
});

Route::get('/about', function () {
    return 'Annisa Prissilya <br>2241760099';
});

Route::get('/user/{Annisa}', function ($name) {
    return 'Arab Cantik'.$name;
});

Route::get('/articles/{id}/comments/{comment}', function ($postId, $commentId) {
    return 'Halaman Artikel ' . $postId . ' dengan ID ' . $commentId;
});

Route::get('/user/{Annisa?}', function ($name=null) {
    return 'Arab cantik '.$name;
});

Route::get('/user/{Annisa?}', function ($name='John') {
    return 'Arab cantik '.$name;
});



Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/articles/', [PageController::class,'articles']);

Route::get('/home', [HomeController::class,'home']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/article', [ArticleController::class,'article']);

Route::resource('photos', PhotoController::class);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Annisa']);
    });
    
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Ica']);
    });

Route::get('/greeting', [WelcomeController::class, 
    'greeting']);
    return view('blog.hello', ['name' => 'Prisil Cans']);

    Route::get('/', [PageController::class,'index']);
    
    







   




















