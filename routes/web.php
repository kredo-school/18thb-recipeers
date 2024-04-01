<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InquiryController;


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
    return view('home');
});

Auth::routes();

// HomeController
Route::get('/home', [HomeController::class, 'index'])->name('index');

// RecipeController
Route::get('/recipe/create', [RecipeController::class, 'create'])->name('create');
Route::post('/recipe//store', [RecipeController::class, 'store'])->name('store');
Route::patch('/recipe/{id}/edit', [RecipeController::class, 'edit'])->name('edit');
Route::get('/recipe//show', [RecipeController::class, 'show'])->name('show');

// UserController
Route::get('/user/resetPassword/show', [UserController::class, 'resetPasswordShow'])->name('resetPassword');

// InquiryController
Route::get('/inquiry', function () {
    return view('inquiry');
});
Route::post('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');
