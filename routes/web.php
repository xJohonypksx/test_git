<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test_git', function () {
    return view('test_git');
});

Route::get('Kevin', function () {
    return view('Kevin');
});

Route::get('Kevin', function () {
    return view('Perla');
});

Route::get('Natalia', function () {
    return view('Natalia');
});

Route::get('yair', function () {
    return view('yair');
});


Route::get('gustavo', function () {
    return view('gustavo');
});

Route::get('vista_irving', function () {
    return view('vista_irving');
});

Route::get('vista_pedro', function () {
    return view('vista_pedro');
});

Route::get('silbana', function () {
    return view('silbana');
});

Route::get('misa', function () {
    return view('misa');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
