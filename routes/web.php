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


Route::get('yair', function () {
    return view('yair');
});


Route::get('gustavo', function () {
    return view('gustavo');
});
Route::resource('generos',App\Http\Controllers\HomeController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
