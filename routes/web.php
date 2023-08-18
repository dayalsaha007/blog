<?php

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\category\CategoryController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/logout', 'logout')->name('logout');
});


Route::controller(BackendController::class)->group(function(){
    Route::get('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
});

Route::controller(CategoryController::class)->group(function(){

    Route::get('/view_category', 'view_category')->name('view_category');
    Route::get('/add_category', 'add_category')->name('add_category');
    Route::post('/store/category', 'store_category');

});


