<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/', [LibroController::class, 'index'])->name('principal');
Route::get('/registro', [LibroController::class, 'create'])->name('registro');
Route::post('/registro', [LibroController::class, 'store'])->name('guardarLibro');


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
