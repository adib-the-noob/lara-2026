<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\IdeasController;

Route::get("/", [IdeasController::class, 'index'])->name("home");
Route::get("/ideas/{idea}/details", [IdeasController::class, 'show'])->name("ideas.show");
Route::post("/ideas/{idea}/update", [IdeasController::class, 'update'])->name("ideas.update");

Route::get('/register', [RegisterUserController::class, 'create']);
