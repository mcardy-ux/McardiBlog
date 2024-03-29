<?php

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

//Inicio Contacto 
Route::get('/contact', function () {
    return view('tabs.contact');
})->name('contact');

//Inicio Contacto 
Route::get('/trends', function () {
    return view('tabs.trends');
})->name('trends');

Route::get('/programming', function () {
    return view('categories.programming');
})->name('programming');

Route::get('/marketing', function () {
    return view('categories.marketing');
})->name('marketing');

Route::get('/design', function () {
    return view('categories.design');
})->name('design');




// articulos
Route::get('/article1', function () {
    return view('articles.article1');
})->name('article1');
// articulos
Route::get('/article2', function () {
    return view('articles.article2');
})->name('article2');
// articulos
Route::get('/article3', function () {
    return view('articles.article3');
})->name('article3');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
