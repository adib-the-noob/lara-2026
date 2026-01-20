<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\IdeasController;

Route::get('/', [IdeasController::class, 'index'])->name('home');
Route::post('/ideas/create', [IdeasController::class, 'create'])->name('ideas.create');
Route::get('/ideas/{idea}/details', [IdeasController::class, 'show'])->name('ideas.show');
Route::post('/ideas/{idea}/update', [IdeasController::class, 'update'])->name('ideas.update');
Route::delete('/ideas/{idea}/delete', [IdeasController::class, 'destroy'])->name('ideas.destroy');

Route::get('/register', [RegisterUserController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterUserController::class, 'create'])->name('register.store');
