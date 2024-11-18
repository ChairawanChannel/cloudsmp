<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\VoteController;
use App\Http\Middleware\EnsureUserIsAuthenticated;
// Rute Login dan Logout
Route::get('/login', function () {
    return view('partials.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Halaman Utama User
Route::get('/', function () {
    return view('users.index');
});
// Route::middleware(['web', EnsureUserIsAuthenticated::class])->group(function () {
Route::get('/reedemcode', function () {
    return view('users.reedemcode');
});

// Rute dengan Middleware EnsureUserIsAuthenticated
// Route::middleware(['web', EnsureUserIsAuthenticated::class])->group(function () {
// Halaman Feedback dan Penyimpanan Feedback
Route::get('/feedback', function () {
    return view('users.feedback');
});
Route::post('/feedback', [FeedbackController::class, 'store']);
// });
