<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/facilities', function () {
    return view('facilities');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/contact', function () {
    return view('contact');
});