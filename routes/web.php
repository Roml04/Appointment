<?php

use Illuminate\Support\Facades\Route;

// Authenticated & Guests

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Authenticated Only

Route::get('/home', function () {
    return view('home', [
        'userName' => 'Patient Name'
    ]);
});

Route::get('/appointments', function () {
    return view('appointments');
});

Route::get('/doctors', function () {
    return view('doctors', [
        'doctorName' => 'Date Harumune',
        'specialization' => 'Pediatrician'
    ]);
});

Route::get('/schedule', function () {
    return view('schedule');
});