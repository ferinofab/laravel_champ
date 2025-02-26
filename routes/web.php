<?php

use App\Http\Controllers\HackathonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/hackathon', [HackathonController::class, 'index'])->name('hackathon.index');

Route::get('/hackathon/register', [RegisterController::class, 'index'])->name('hackathon.register');
Route::post('/hackathon/register', [RegisterController::class, 'store'])->name('hackathon.register.store');

Route::get('/hackathon/login', [LoginController::class, 'index'])->name('hackathon.login');


