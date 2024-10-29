<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'getAdminDashboard'])->name('admin.dashboard');
    Route::get('/user',[AdminController::class,'getUsersList'])->name('admin.list.users');
    Route::post('/user',[AdminController::class,'getUsers'])->name('admin.get.users');
});
