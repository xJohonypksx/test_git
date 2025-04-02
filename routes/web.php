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

Route::get('Perla', function () {
    return view('Perla');
});

Route::get('natalia', function () {
    return view('natalia');
});

Route::get('yair', function () {
    return view('yair');
});

Route::get('gustavo', function () {
    return view('gustavo');
});
Route::resource('generos',App\Http\Controllers\HomeController::class);

Route::get('vista_irving', function () {
    return view('vista_irving');
});

Route::get('vista_pedro', function () {
    return view('vista_pedro');
});

Route::get('silbana', function () {
    return view('silbana');
});

Route::get('Alan', function () {
    return view('Alan');
});

Route::get('misa', function () {
    return view('misa');
});
Route::get('Christopher', function (){
    return view('Christopher');
});

Route :: resource('clasificacion', App\Http\Controllers\ClasificacionController::class);

Route::resource('horas', App\Http\Controllers\HoraController::class);

Route::resource('Ciudad', App\Http\Controllers\CiudadController::class);


Route::resource('proyecciones',App\Http\Controllers\ProyeccionController::class);


Route::resource('idiomas',App\Http\Controllers\IdiomaController::class);

Route::resource('dias',App\Http\Controllers\DiaController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


