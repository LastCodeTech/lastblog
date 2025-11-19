<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LastblogController;
use Illuminate\Support\Facades\Route;
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/',[AuthController::class,'register'])->name('register');
Route::get('/index',[LastblogController::class,'index'])->name('index');
Route::post('register process',[AuthController::class,'registerProcess'])->name('register.process');
Route::post('login process',[AuthController::class,'loginProcess'])->name('login.process');
Route::get('/categories',[LastblogController::class,'category'])->name('category');