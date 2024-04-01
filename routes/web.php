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
Route::group(['prefix' => 'home', 'as' => 'home.'], function() {
    Route::get('/home', [HomeController::class, 'index'])->name('index');
});

Route::group(['prefix' => 'recipe', 'as' => 'recipe.'], function() {
    Route::get('/recipe/create', [RecipeController::class, 'create'])->name('create');
    Route::get('/recipe/edit', [RecipeController::class, 'edit'])->name('edit');
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function() {
    Route::get('/user/resetPassword/show', [UserController::class, 'resetPasswordShow'])->name('resetPassword');
});
// InquiryController
Route::get('/inquiry', function () {
    return view('inquiry');
});
Route::post('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');
