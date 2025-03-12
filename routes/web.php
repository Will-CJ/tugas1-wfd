<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/about', function () {
    return view('about');
})->name('about');