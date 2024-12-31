<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Models\Appointment;
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
        'pagename' => 'Dashboard'
    ]);
})->name('auth.dashboard');

// Appointments
Route::get('/appointments', [AppointmentController::class, 'index'])->name('auth.appointment.index');

Route::get('/appointments/{appointment_id}', [AppointmentController::class, 'display'])->name('auth.appointment.display');

// Doctors
Route::get('/doctors', [DoctorController::class, 'index'])->name('auth.doctors.index');

// Schedule
Route::get('/doctors/{doctor_id}', [AppointmentController::class, 'schedule'])->name('auth.doctors.schedule');



Route::post('/register', [UserController::class, 'register'])->name('user.register');

Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::post('/appointments/{appointment_id}', [AppointmentController::class, 'delete'])->name('auth.appointment.delete');

Route::post('/doctors/{doctor_id}', [AppointmentController::class, 'create'])->name('auth.appointment.create');