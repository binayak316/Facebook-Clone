<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController; 
use App\Http\Controllers\StoryController; 
use Illuminate\Support\Facades\Auth;







// Route::get('/',[RegisterController::class, 'index'])->middleware('guest')->name('login-user');
Route::get('/',[RegisterController::class, 'index'])->name('authCheck');

Route::post('/register',[RegisterController::class, 'store'])->name('registerUser');
Route::post('/login',[RegisterController::class, 'login'])->name('loginUser');

Route::get('/logout',[RegisterController::class, 'logout'])->middleware('auth')->name('logout');
// Route::get('/home',[RegisterController::class,'home'])->name('home');

Route::get('/profile',[ProfileController::class,'profile'])->middleware('auth')->name('profile');
// profile picture and cover picture add with post method
Route::post('/profile',[ProfileController::class,'profile_posted'])->name('profile_posted')->middleware('auth');
Route::post('/cover',[ProfileController::class,'cover_posted'])->name('cover_posted')->middleware('auth');



// route for the post my post(status/or photos)
Route::post('/',[PostController::class, 'create'])->middleware('auth')->name('PostCreate');


// for story post method
Route::post('/story',[StoryController::class,'mystory'])->middleware('auth')->name('story');



