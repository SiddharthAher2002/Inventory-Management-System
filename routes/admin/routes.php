<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'getAdminDashboard'])->name('admin.dashboard');
});
