<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\Admin\InquiriesController;

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

// InquiryController
Route::get('/inquiry', function(){
    return view('inquiry');
});
Route::post('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');

// InquiriesController
Route::get('/admin/inquiries_list',[InquiriesController::class], 'show')->name('admin.inquiry.show');
Route::get('/admin/inquiry/{id}/detail',[InquiriesController::class, 'detail'])->name('admin.inquiry.detail');
Route::patch('/admin/inquiry/{id}/update',[InquiriesController::class, 'update'])->name('admin.inquiry.update');