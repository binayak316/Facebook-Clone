<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;







// Route::get('/',[RegisterController::class, 'index'])->middleware('guest')->name('login-user');
Route::get('/',[RegisterController::class, 'index'])->name('authCheck');

Route::post('/register',[RegisterController::class, 'store'])->name('registerUser');
Route::post('/login',[RegisterController::class, 'login'])->name('loginUser');

Route::get('/logout',[RegisterController::class, 'logout'])->middleware('auth')->name('logout');
// Route::get('/home',[RegisterController::class,'home'])->name('home');

Route::get('/profile',[ProfileController::class,'profile'])->middleware('auth')->name('profile');
Route::post('/profile',[ProfileController::class,'profile_posted'])->middleware('auth')->name('profile_posted');


