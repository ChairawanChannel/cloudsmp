<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\VoteController;
use App\Http\Middleware\EnsureUserIsAuthenticated;

// Rute Login dan Logout
Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Halaman Utama User
Route::get('/', function () {
    return view('users.index');
});

// Rute dengan Middleware EnsureUserIsAuthenticated
Route::middleware(['web', EnsureUserIsAuthenticated::class])->group(function () {
    // Halaman Vote dan Pengiriman Vote
    Route::get('/vote', function () {
        return view('users.vote');
    });
    Route::post('/vote', [VoteController::class, 'vote']);

    // Halaman Feedback dan Penyimpanan Feedback
    Route::get('/feedback', function () {
        return view('users.feedback');
    });
    Route::post('/feedback', [FeedbackController::class, 'store']);
});
