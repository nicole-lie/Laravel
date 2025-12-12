<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('Homepage');
});

Route::get('/about', function () {
    return view('Aboutpage');
});

Route::get('/contact', function () {
    return view('Contactpage');
});