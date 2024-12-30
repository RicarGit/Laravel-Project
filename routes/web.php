<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieDetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/movie/{id}', [MovieDetailsController::class, 'movieDetails'])->name('details');

Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');
