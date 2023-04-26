<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/album', function () {
    return view('album');
})->name('album');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/sumbit', function(){
    return dd(Request::all());
    // return "IT IS Enhypen";
})->name('contact-form');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');