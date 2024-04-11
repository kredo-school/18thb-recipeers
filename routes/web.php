<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\Admin\InquiriesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RecipesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

// test route for navbar and footer
Route::get('/admin/list-of-accounts', function () {
    return view('admin.list-of-accounts');
});
// test route

Auth::routes();

// HomeController
Route::get('/home', [HomeController::class, 'index'])->name('home');

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
Route::get('/user/reset-password', [App\Http\Controllers\UserController::class, 'reset_password_show'])->name('reset-password.show');

// AdminController
Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'home'])->name('admin.home');

// ProfileController
Route::get('/profile/{id}/show', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// InquiryController
Route::get('/inquiry', [InquiryController::class, 'index'])->name('inquiry');
Route::post('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');

// InquiriesController
Route::get('/admin/list_of_inquiries', [InquiriesController::class, 'show'])->name('admin.inquiries.show');
Route::get('/admin/inquiry/{id}/detail', [InquiriesController::class, 'detail'])->name('admin.inquiry.detail');
Route::patch('/admin/inquiry/{id}/update', [InquiriesController::class, 'update'])->name('admin.inquiry.update');

// UsersController
Route::get('/admin/list_of_accounts', [UsersController::class, 'show'])->name('admin.users.show');

// RecipesController
Route::get('/admin/list_of_recipes', [RecipesController::class, 'show'])->name('admin.recipes.show');
