<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/bahan', function () {
    return view('recipe.bahan');
});
Route::get('/langkah', function () {
    return view('recipe.langkah');
});

Route::get('/review', function () {
    return view('recipe.review');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');