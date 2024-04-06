<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/user/reset-password', [App\Http\Controllers\UserController::class, 'reset_password_show'])->name('reset-password.show');


// InquiryController
Route::get('/inquiry', function () {
    return view('inquiry');
})->name('inquiry');

Route::post('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');
