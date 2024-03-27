<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// HomeController
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// RecipeController
Route::get('/recipe/create', [App\Http\Controllers\RecipeController::class, 'create'])->name('create');
Route::get('/recipe/edit', [App\Http\Controllers\RecipeController::class, 'edit'])->name('edit');


// UserController
Route::get('/user/resetPassword', [App\Http\Controllers\UserController::class, 'resetPasswordShow'])->name('resetPasswordShow');


// ProfileController
Route::get('/profile-detail/{id}/show', [ProfileController::class, 'show'])->name('profile-detail.show');

Route::get('/profile-detail/{id}/edit', [ProfileController::class, 'edit'])->name('profile-detail.edit');

Route::patch('/profile-detail/{id}/update', [ProfileController::class, 'update'])->name('profile-detail.update');

Route::delete('/profile-detail/{id}/delete', [ProfileController::class, 'delete'])->name('profile-detail.delete');


