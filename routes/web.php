<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/login');
});

Route::get('/dashboard', function () {
    return view('layout/index');
});

Route::get('/vote', function () {
    return view('layout/vote');
});
