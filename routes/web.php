<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('proyectos', App\Http\Controllers\ProyectoController::class);
Route::resource('tareas', App\Http\Controllers\TareaController::class);
Route::resource('users', App\Http\Controllers\UserController::class);


