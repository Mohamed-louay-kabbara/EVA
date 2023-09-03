<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
Route::middleware('auth','is_admin')->group(function(){
Route::get('/Admin',[BookController::class,'admin'])->name('admin.dashboard');
});