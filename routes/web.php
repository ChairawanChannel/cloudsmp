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

// Rute Admin (dengan middleware khusus admin)
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
    Route::get('/atable-feedback', function () {
        return view('admin.table-feedback');
    });
    Route::get('/atable-vote', function () {
        return view('admin.table-vote');
    });
    Route::get('/atable-transactions', function () {
        return view('admin.table-transactions');
    });
});

// Rute Owner (dengan middleware khusus owner)
Route::middleware([OwnerMiddleware::class])->group(function () {
    Route::get('/owner', function () {
        return view('owner.index');
    });
    Route::get('/table-feedback', function () {
        return view('owner.table-feedback');
    });
    Route::get('/table-vote', function () {
        return view('owner.table-vote');
    });
    Route::get('/table-transactions', function () {
        return view('owner.table-transactions');
    });
    Route::get('/edit_transactions', function () {
        return view('owner.edit_transactions');
    });
    Route::get('/print', function () {
        return view('owner.print');
    });
});
