<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\VoteController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\OwnerMiddleware;
use App\Http\Middleware\EnsureUserIsAuthenticated;

// Rute Login dan Logout
Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk halaman utama user
Route::get('/', function () {
    return view('users.index');
});

// Rute untuk halaman yang membutuhkan login user
Route::middleware(['web', EnsureUserIsAuthenticated::class])->group(function () {
    Route::get('/vote', function () {
        return view('users.vote');
    });

    Route::middleware([EnsureUserIsAuthenticated::class])->group(function () {
        Route::get('/feedback', function () {
            return view('users.feedback');
        });

        Route::post('/feedback', [FeedbackController::class, 'store']);
    });
    Route::post('/vote', [VoteController::class, 'vote']);
});
