<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

// Authenticated(?) & Guests

Route::get('/', function () {
    return view('landing');
})->name('guest.landing');

Route::get('/login', function () {
    return view('login');
})->name('guest.login');

Route::get('/register', function () {
    return view('register');
})->name('guest.register');

// Authenticated Only

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard', [
        'userName' => 'Patient Name'
    ]);
})->name('auth.dashboard');

// Appointments
Route::get('appointments', [AppointmentController::class, 'index'])->name('auth.appointments.index');


// Doctors
Route::get('doctors', [DoctorController::class, 'index'])->name('auth.doctors.index');


// Schedule
Route::get('/schedule', function () {
    return view('schedule');
})->name('auth.schedule');