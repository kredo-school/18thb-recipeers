<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

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
    return view('home');
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
Route::get('/profile/{id}/show', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// delete accountをSoftDeleteとするなら↓このdeleteは不要？
// Route::delete('/profile/{id}/delete', [ProfileController::class, 'delete'])->name('profile.delete');




// InquiryController
Route::get('/inquiry', function () {
    return view('inquiry');
});
Route::post('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');
