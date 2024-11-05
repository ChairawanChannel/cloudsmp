<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\EnsureUserIsAuthenticated;

Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// users route
Route::get('/', function () {
    return view('users/index');
});
Route::get('/login', function () {
    return view('users/login');
});
// Menggunakan middleware untuk halaman yang membutuhkan login
Route::get('/vote', function () {
    return view('users.vote');
})->middleware(EnsureUserIsAuthenticated::class);

Route::get('/feedback', function () {
    return view('users.feedback');
})->middleware(EnsureUserIsAuthenticated::class);


// admin route

Route::get('admin/login', function () {
    return view('admin/login');
});
Route::get('admin/', function () {
    return view('admin/index');
});
Route::get('admin/table-feedback', function () {
    return view('admin/table-feedback');
});
Route::get('admin/table-vote', function () {
    return view('admin/table-vote');
});
Route::get('admin/table-transactions', function () {
    return view('admin/table-transactions');
});

// owner route

Route::get('owner/login', function () {
    return view('admin/login');
});
