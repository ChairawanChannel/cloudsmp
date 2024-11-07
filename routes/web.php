<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\EnsureUserIsAuthenticated;

Route::get('/login', function () {
    return view('users.login');
})->name('login');


// Rute logout dengan metode POST
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login');

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

Route::get('owner/', function () {
    return view('owner/index');
});
Route::get('owner/table-feedback', function () {
    return view('owner/table-feedback');
});
Route::get('owner/table-vote', function () {
    return view('owner/table-vote');
});
Route::get('owner/table-transactions', function () {
    return view('owner/table-transactions');
});
Route::get('owner/edit_transactions', function () {
    return view('owner/edit_transactions');
});
Route::get('owner/print', function () {
    return view('owner/print');
});
