<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;

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
//prac1
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::view('/about', 'about', ['name' => 'Ahmad Farrel Sirajudin Zaidan', 'nim' => '2041720238','class' => 'TI-2I']);


// Route::get('/article/{id}', function ($id) {
//     return 'This is article with ID: ' .$id; 
// });

// //prac2
// Route::get('/index', [HomeController::class,'index']);
// Route::get('/about', [AboutController::class,'about']);
// Route::get('/articles/{id}', [ArticleController::class,'articles']);

//prac3
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/product', function () {
//     return view('category');
// });

// Route::get('/news', function () {
//     return view('news');
// });

// Route::get('/program', function () {
//     return view('program');
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/', 'index');

Route::get('/about-us', function () {
    return view('about-us');
});

// Route::get('/productpage', function () {
//     return view('productpage');
// });

Route::get('/productpage', [PostController::class,'index']);

Route::get('/howitworks', function () {
    return view('howitworks');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/cms', function () {
    return view('cms');
});

Route::get('/cooming-soon', function () {
    return view('cooming-soon');
});
