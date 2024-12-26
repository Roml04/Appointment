<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
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

Route::get('/dashboard', function () {
    return view('dashboard', [
        'userName' => 'Patient Name'
    ]);
});

Route::get('appointments', [AppointmentController::class, 'index']);

Route::get('doctors', [DoctorController::class, 'index']);

Route::get('/schedule', function () {
    return view('schedule');
});