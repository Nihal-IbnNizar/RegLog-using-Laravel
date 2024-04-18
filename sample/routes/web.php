<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class,'main']);
Route::get('/reg', [HomeController::class,'register'])->name("reg");
Route::post('/register', [UserController::class,'register'])->name("register");
Route::get('/loginto', [UserController::class,'loginmain'])->name('Loginmain');
Route::post('/login', [UserController::class,'login']);
