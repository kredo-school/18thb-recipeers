<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EatingPreferenceController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\Admin\InquiriesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\LikeController;
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

// test route for navbar and footer
Route::get('/admin/list-of-accounts', function () {
    return view('admin.list-of-accounts');
});
// test route

Auth::routes();

// HomeController
Route::get('/home', [HomeController::class, 'index'])->name('index');

// RecipeController
Route::get('/recipe', [RecipeController::class, 'index'])->name('all-recipes');
Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe.create');
Route::get('/recipe/edit', [RecipeController::class, 'edit'])->name('recipe.edit');
Route::post('/recipe/store', [RecipeController::class, 'store'])->name('recipe.store');
Route::get('/recipe/show', [RecipeController::class, 'show'])->name('show');

//BookmarkController
Route::get('/bookmarks', [App\Http\Controllers\BookmarkController::class, 'index'])->name('bookmarks');

//LikeController
Route::get('/liked-recipes', [App\Http\Controllers\LikeController::class, 'index'])->name('liked-recipes');

// UserController
Route::get('/user/search-results', [App\Http\Controllers\UserController::class, 'index'])->name('search-results');
Route::get('/user/reset-password', [App\Http\Controllers\UserController::class, 'reset_password_show'])->name('reset-password.show');

Route::delete('/user/account/{id}/delete', [UserController::class, 'softDelete'])->name('user.account.delete');

// AdminController
Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'Home'])->name('Admin.home');

// ProfileController
Route::get('/profile/{id}/show', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// InquiryController
Route::get('/inquiry', [InquiryController::class, 'index'])->name('inquiry');
Route::post('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');

// InquiriesController
Route::get('/admin/list_of_inquiries', [InquiriesController::class, 'show'])->name('admin.inquiry.show');
Route::get('/admin/inquiry/{id}/detail', [InquiriesController::class, 'detail'])->name('admin.inquiry.detail');
Route::patch('/admin/inquiry/{id}/update', [InquiriesController::class, 'update'])->name('admin.inquiry.update');

// CategoryController
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');

// EatingPreferenceController
Route::post('eat_pref/store', [EatingPreferenceController::class, 'store'])->name('eat_pref.store');

// IngredientController
Route::post('ingredient/store', [IngredientController::class, 'store'])->name('ingredient.store');
