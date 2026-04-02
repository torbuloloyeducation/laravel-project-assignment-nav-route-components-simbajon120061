<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/services', 'services');
Route::view('/showcases', 'showcases');
Route::view('/blog', 'blog');

Route::get('/', function () {
    return view('welcome');
});

##both routes above works but view works only for static webpages.

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/showcases', function () {
    return view('showcases');
});

Route::get('/blog', function () {
    return view('blog');
});