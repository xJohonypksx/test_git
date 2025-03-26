<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('test_git', function () {
    return view('test_git');
});
Route::resource('generos', App\Http\Controllers\GeneroController::class);

Route::resource('ciudades', App\Http\Controllers\CiudadController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
