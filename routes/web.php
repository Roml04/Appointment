<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/home', function () {
    return view('home', [
        'userName' => 'Patient Name'
    ]);
});

Route::get('/appointment', function () {
    return view('appointment');
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