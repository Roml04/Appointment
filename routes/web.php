<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'userName' => ''
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