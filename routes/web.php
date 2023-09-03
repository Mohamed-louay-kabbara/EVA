<?php

use App\Http\Controllers\ProfileController;
use App\Models\category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;

    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
        ], function(){
	 /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
     Route::get('/',function(){
        return view('auth.login');
     });
     Route::get('/register',function(){
        return view('auth.register');
     });
     Route::resource('category',CategoryController::class);
     Route::resource('product',ShoesController::class);
     Route::resource('users',usersController::class);
     Route::resource('orders',OrdersController::class);
     Route::resource('opinions',OpinionController::class);
     Route::view('admin', 'Admin');
    Route::get('show_shoses',[ShoesController::class,'create'])->name('show_shoses');
     Route::get('addorder/{id}',[OrdersController::class,'Add'])->name('addorder');
     Route::get('/dashboard',[usersController::class,'create'])->middleware(['auth', 'verified',])->name('dashboard');
     Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::get('/show_opinions', [OpinionController::class, 'index1'])->name('opinions.index1');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });                          
    });

require __DIR__.'/auth.php';
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');