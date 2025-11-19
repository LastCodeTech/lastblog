<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/',[AuthController::class,'register'])->name('register');
Route::post('register process',[AuthController::class,'registerProcess'])->name('register.process');
Route::post('login process',[AuthController::class,'loginProcess'])->name('login.process');
