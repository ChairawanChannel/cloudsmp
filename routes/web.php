<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/index');
});

Route::get('/feedback', function () {
    return view('layout/feedback');
});

Route::get('/vote', function () {
    return view('layout/vote');
});

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/login', function () {
    return view('layout/login');
});