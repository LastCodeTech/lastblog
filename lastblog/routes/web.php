<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LastblogController;
use Illuminate\Support\Facades\Route;
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('/index',[LastblogController::class,'index'])->name('index');
Route::post('register process',[AuthController::class,'registerProcess'])->name('register.process');
Route::post('login process',[AuthController::class,'loginProcess'])->name('login.process');
Route::get('/categories',[LastblogController::class,'category'])->name('category');
Route::get('/create',[LastblogController::class,'create'])->name('create');
Route::post('/store',[LastblogController::class,'store'])->name('store');
Route::get('/logout',[LastblogController::class,'logout'])->name('logout');
Route::get('/edit/{id}',[LastblogController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[LastblogController::class,'update'])->name('update');
Route::delete('/destroy/{id}',[LastblogController::class,'destroy'])->name('destroy');