<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\Admin\InquiriesController;
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

// test route for navbar and footer
Route::get('/users/recipe/all-recipes', function () {
    return view('users.recipe.all-recipes');
})->name('all-recipes');

Route::get('/users/bookmarks', function () {
    return view('users.bookmarks');
})->name('bookmarks');

Route::get('/users/liked-recipes', function () {
    return view('users.liked-recipes');
})->name('liked-recipes');

// Route::get('/inquiry', function () {
//     return view('inquiry');
// })->name('inquiry');

Route::get('/users/account/profile-detail', function () {
    return view('users.account.profile-detail');
})->name('profile-detail');

//

Route::get('/admin/list-of-accounts', function () {
    return view('admin.list-of-accounts');
});

Route::get('/users/search-results', function () {
    return view('users.search-results');
});

// test route

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




// InquiryController
Route::get('/inquiry', function(){
    return view('inquiry');
})->name('inquiry');
Route::post('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');

// InquiriesController
Route::get('/admin/list_of_inquiries',[InquiriesController::class], 'show')->name('admin.inquiry.show');
Route::get('/admin/inquiry/{id}/detail',[InquiriesController::class, 'detail'])->name('admin.inquiry.detail');
Route::patch('/admin/inquiry/{id}/update',[InquiriesController::class, 'update'])->name('admin.inquiry.update');
