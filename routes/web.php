<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\IdeasController;

Route::get("/", [IdeasController::class, 'index'])->name("home");
Route::get('/register', [RegisterUserController::class, 'create']);
