<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\IsAdmin;


Route::get('/', [DashboardController::class, 'home']);

Route::get('/register', [FormController::class, 'form']);
Route::get('/welcome', [FormController::class, 'welcome']);
Route::post('/welcome', [FormController::class, 'welcome']);

Route::middleware(['auth', isAdmin::class])->group(function(){
    // Genre
    // Create Data
    Route::get('/genre/create', [GenreController::class, 'create']);
    Route::post('/genre', [GenreController::class, 'store']);
    // Update Data
    Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
    Route::put('/genre/{id}', [GenreController::class, 'update']);
    // Delete Data
    Route::delete('/genre/{id}', [GenreController::class, 'destroy']);

});
//Auth
//Logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

//PROFILE
Route::get('/profile', [AuthController::class, 'getprofile'])->middleware('auth');
Route::post('/profile', [AuthController::class, 'createProfile'])->middleware('auth');
Route::put('/profile/{id}', [AuthController::class, 'updateProfile'])->middleware('auth');

Route::post('/comments/{book_id}', [CommentController::class, 'store'])->middleware('auth');

// CRUD GENRE
// Read Data
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);
// CRUD Books
Route::resource('book', BookController::class);

// Auth 
// Register
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'registeruser']);
//Login
Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
