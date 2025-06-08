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


use App\Http\Controllers\RecipeController;

Route::get('/recipe/{id}/ingredients', [RecipeController::class, 'showIngredients'])->name('recipe.ingredients');
Route::get('/recipe/{id}/steps', [RecipeController::class, 'showSteps'])->name('recipe.steps');
Route::get('/recipe/{id}/reviews', [RecipeController::class, 'showReviews'])->name('recipe.reviews');


use App\Http\Controllers\CategoryController;

// Menampilkan daftar kategori
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Menampilkan resep dalam kategori
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');


use App\Http\Controllers\FavoriteController;

// Menambahkan resep ke favorit
Route::post('/recipe/{id}/favorite', [FavoriteController::class, 'store'])->name('favorite.store');

// Menghapus resep dari favorit
Route::delete('/recipe/{id}/favorite', [FavoriteController::class, 'destroy'])->name('favorite.destroy');

Route::get('/favorites', [RecipeController::class, 'showFavorites'])->name('favorites.index');


use App\Http\Controllers\ProfileController;

// Menampilkan profil pengguna
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');


Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
