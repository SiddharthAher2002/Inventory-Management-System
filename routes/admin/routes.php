<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'getAdminDashboard'])->name('admin.dashboard');
    Route::get('/login',[AdminController::class,'showLoginForm'])->name('admin.show.login');
    Route::post('/login',[AdminController::class,'login'])->name('admin.validate.login');
    Route::get('/user',[AdminController::class,'showUsers'])->name('admin.list.users');
    Route::post('/user',[AdminController::class,'getUsers'])->name('admin.get.users');
});
