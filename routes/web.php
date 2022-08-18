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
    return view('home.index');
})->name('home');

Route::get('/about-us', function(){
    return view('about.index');
})->name('about');

Route::get('/contact-us', function(){
    return view('contact.index');
})->name('contact');

Route::get('/Team member', function(){
    return view('team.index');
})->name('team');

Route::get('/services', function(){
    return view('services.index');
})->name('services');

Route::get('/portfolio', function(){
    return view('portfolio.index');
})->name('portfolio');



