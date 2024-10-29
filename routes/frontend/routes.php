<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'getHomePage'])->name('home');
Route::get('/login',[HomeController::class,'getFrontLoginPage'])->name('frontend.login');
Route::get('/signup',[HomeController::class,'getFrontSignupPage'])->name('frontend.signup');