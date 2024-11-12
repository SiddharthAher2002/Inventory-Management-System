<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::prefix('admin')->middleware('auth')->middleware('auth.role')->group(function () {
    Route::get('/', [AdminController::class, 'getAdminDashboard'])->name('admin.dashboard');
    Route::get('/user', [AdminController::class, 'showUsers'])->name('admin.list.users');
    Route::post('/user', [AdminController::class, 'getUsers'])->name('admin.get.users');
});
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.show.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.validate.login');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');