<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// ----------------- Public Routes -----------------
Route::get('/', [MovieController::class, 'publicIndex'])->name('home');
Route::get('/movie/{movie}', [MovieController::class, 'show'])->name('movie.show');

// ----------------- Auth Routes -----------------
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ----------------- Admin Routes -----------------
Route::prefix('admin')->middleware(['web'])->group(function () {

    // Admin Dashboard
    Route::get('/dashboard', function () {
        if (!session()->has('admin')) return redirect()->route('login');
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Movie CRUD
    Route::get('/movies', [MovieController::class, 'index'])->name('admin.movies');
    Route::get('/movies/create', [MovieController::class, 'create'])->name('admin.movies.create');
    Route::post('/movies', [MovieController::class, 'store'])->name('admin.movies.store');
    Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('admin.movies.edit');
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('admin.movies.update');
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('admin.movies.destroy');
});
