<?php

use App\Http\Controllers\HackathonController;
use Illuminate\Support\Facades\Route;

Route::get('/hackathon', [HackathonController::class, 'index'])->name('hackathon.index');

Route::get('/hackathon/create', [HackathonController::class, 'create'])->name('hackathon.create');
Route::post('/hackathon', [HackathonController::class, 'store'])->name('hackathon.store');

Route::get('/hackathon/signIn', [HackathonController::class, 'signIn'])->name('hackathon.signIn');


