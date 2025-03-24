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

<<<<<<< HEAD
Route::get('Alan', function () {
    return view('Alan');
=======
Route::get('misa', function () {
    return view('misa');
>>>>>>> 2b84c1183dde7620dcb6243da04557423f34dd1a
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
