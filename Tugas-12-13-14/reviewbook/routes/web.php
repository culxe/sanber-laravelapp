<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;

Route::get('/', [DashboardController::class, 'home']);

Route::get('/register', [FormController::class, 'form']);
Route::get('/welcome', [FormController::class, 'welcome']);
Route::post('/welcome', [FormController::class, 'welcome']);

// CRUD
// Create Data
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre', [GenreController::class, 'store']);

// Read Data
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);

// Update Data
Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
Route::put('/genre/{id}', [GenreController::class, 'update']);

// Delete Data
Route::delete('/genre/{id}', [GenreController::class, 'destroy']);