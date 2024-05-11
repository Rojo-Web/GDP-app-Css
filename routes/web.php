<?php

use App\Http\Controllers\TareaController;
use App\Http\Controllers\DatosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('proyectos', App\Http\Controllers\ProyectoController::class);
Route::resource('tareas', App\Http\Controllers\TareaController::class);
Route::resource('calculadora', App\Http\Controllers\CalculadoraController::class);
Route::resource('resultados', App\Http\Controllers\resultController::class);
Route::post('datos', [App\Http\Controllers\DatosController::class, 'store'])->name('datos.store');
Route::delete('datos/{dato}', [DatosController::class, 'destroy'])->name('datos.destroy');
Route::get('tareas/{id}/accion', [TareaController::class, 'accion']);

Route::resource('users', App\Http\Controllers\UserController::class);
