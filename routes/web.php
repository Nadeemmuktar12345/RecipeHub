<?php

use App\Http\Controllers\Users\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\RecipesController;
use App\Http\Controllers\Users\RecipeGenratorController;
use App\Http\Controllers\Users\BlogsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('master');
// });

// Route::get('/', [RecipesController::class, 'index'])->name('recipes.index');

Route::get('/recipes', [RecipesController::class, 'index'])->name('recipes.index');
Route::get('/Categories', [CategoryController::class, 'index'])->name('Category.index');
Route::get('/RecipeGenrator', [RecipeGenratorController::class, 'index'])->name('recipes.recipes'); 