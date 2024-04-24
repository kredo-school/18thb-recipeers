<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\Admin\InquiriesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RecipesController;
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
Route::get('/recipe', [RecipeController::class, 'index'])->name('all-recipes');
Route::get('/recipe/create', [RecipeController::class, 'create'])->name('create');
Route::get('recipe/{id}/detail', [RecipeController::class, 'show'])->name('recipe.show');
Route::get('/recipe/edit', [RecipeController::class, 'edit'])->name('edit');

//BookmarkController
Route::get('/bookmarks', [BookmarkController::class, 'index'])->name('bookmarks');

//LikeController
Route::get('/liked-recipes', [LikeController::class, 'index'])->name('liked-recipes');

// UserController
Route::get('/user/search-results', [UserController::class, 'index'])->name('search-results');
Route::get('/user/reset-password', [UserController::class, 'reset_password_show'])->name('reset-password.show');

Route::delete('/user/account/{id}/delete', [UserController::class, 'softDelete'])->name('user.account.delete');

Route::get('/user/account/{id}/paymentInfo', [UserController::class, 'showPaymentInfo'])->name('paymentInfo.show');

// AdminController
Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');

// ProfileController
Route::get('/profile/{id}/show', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
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
Route::delete('/admin/list_of_accounts/{id}/deactivate',[UsersController::class,'deactivate'])->name('admin.users.deactivate');
Route::patch('/admin/list_of_accounts/{id}/activate',[UsersController::class,'activate'])->name('admin.users.activate');

// RecipesController
Route::get('/admin/list_of_recipes', [RecipesController::class, 'show'])->name('admin.recipes.show');
Route::delete('/admin/list_of_recipes/{id}/hide',[RecipesController::class,'hide'])->name('admin.recipes.hide');
Route::patch('/admin/list_of_recipes/{id}/unhide',[RecipesController::class,'unhide'])->name('admin.recipes.unhide');
