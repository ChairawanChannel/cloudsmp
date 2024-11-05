<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

// users route
Route::get('/', function () {
    return view('users/index');
});
Route::get('/login', function () {
    return view('users/login');
});
Route::get('/vote', function () {
    return view('users/vote');
});
Route::get('/feedback', function () {
    return view('users/feedback');
});

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
