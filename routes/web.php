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
})->middleware(['auth'])->name('menu');

//PACIENTES
Route::get('/tabla-paciente', [PacienteController::class, 'index'])->middleware(['auth'])->name('tabla-paciente');
Route::get('/paciente', [PacienteController::class, 'create'])->middleware(['auth'])->name('paciente');
Route::post('/paciente', [PacienteController::class, 'store'])->middleware(['auth'])->name('paciente.guardar');
Route::get('/perfil-paciente/{paciente}', [PacienteController::class, 'show'])->middleware(['auth'])->name('perfil-paciente');
Route::delete('/paciente/{paciente}', [PacienteController::class, 'destroy'])->middleware(['auth'])->name('paciente.destroy');