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

Route::get('/', function () {
    return view('home');
});

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
