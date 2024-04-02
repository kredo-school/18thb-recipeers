<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;


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

// test route for navbar and footer
// Route::get('/users/recipe/all-recipes', function () {
//     return view('users.recipe.all-recipes');
// })->name('all-recipes');

// Route::get('/users/bookmarks', function () {
//     return view('users.bookmarks');
// })->name('bookmarks');

// Route::get('/users/liked-recipes', function () {
//     return view('users.liked-recipes');
// })->name('liked-recipes');

// Route::get('/users/account/profile-detail', function () {
//     return view('users.account.profile-detail');
// })->name('profile-detail');
//

Route::get('/admin/list-of-accounts', function () {
    return view('admin.list-of-accounts');
});

// Route::get('/users/search-results', function () {
//     return view('users.search-results');
// });

// test route

Auth::routes();

// HomeController
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// RecipeController
Route::get('/recipe', [App\Http\Controllers\RecipeController::class, 'index'])->name('all-recipes');
Route::get('/recipe/create', [App\Http\Controllers\RecipeController::class, 'create'])->name('create');
Route::get('/recipe/edit', [App\Http\Controllers\RecipeController::class, 'edit'])->name('edit');

//BookmarkController
Route::get('/bookmarks', [App\Http\Controllers\BookmarkController::class, 'index'])->name('bookmarks');

//LikeController
Route::get('/liked-recipes', [App\Http\Controllers\LikeController::class, 'index'])->name('liked-recipes');

// UserController
Route::get('/user/search-results', [App\Http\Controllers\UserController::class, 'index'])->name('search-results');
Route::get('/user/resetPassword', [App\Http\Controllers\UserController::class, 'resetPasswordShow'])->name('resetPasswordShow');

//ProfileController
Route::get('/users/account/profile-detail', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile-detail');


// InquiryController
// Route::get('/inquiry', function () {
//     return view('inquiry');
// })->name('inquiry');
Route::get('/inquiry', [InquiryController::class, 'index'])->name('inquiry');

Route::post('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');
