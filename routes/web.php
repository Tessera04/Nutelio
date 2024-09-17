<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');

//REGISTRO
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

//INICIO DE SESION
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');
//CERRAR SESION
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


//PANTALLA PRINCIPAL
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

//PACIENTES
Route::get('/paciente', [PacienteController::class, 'index'])->name('paciente');