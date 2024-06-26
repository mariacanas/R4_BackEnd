<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 

Route::get('/', [RecipeController::class, 'index'])->name('home');
Route::get('/recipe/{id}', [RecipeController::class, 'show'])->name('recipe.show');

//Rutas para las APIs
Route::get('/api/recipes/{page}', [RecipeController::class, 'apiPage']);
Route::get('/api/recipe/{id}', [RecipeController::class, 'apiIndex']);
Route::get('/api/category/{id}/{page}', [CategoryController::class, 'apiIndex']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
