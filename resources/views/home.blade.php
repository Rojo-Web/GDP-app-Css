@extends('layouts.app')
@if (Auth::check())
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="grid text-center">
            <div class="row">
                @if (Auth::user()->rol == "Admin" || Auth::user()->rol == "Gestor")
                <div style="width: 50%;">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.pexels.com/photos/2808402/pexels-photo-2808402.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8" style="display: flex;align-items: center;">
                                <div class="card-body">
                                    <h5 class="card-title">Proyectos</h5>
                                    <p class="card-text">¡Convierte tu visión en acción! Cada proyecto es un lienzo en blanco esperando tu creatividad para pintar el éxito. ¡Inspira, organiza y haz realidad tus sueños de proyecto! 💡🚀</p>
                                    <a class="btn btn-primary" href="{{ route('proyectos.index')}}" role="button" style="width: 30%;">Ir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div style="width: 50%;">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.pexels.com/photos/6146704/pexels-photo-6146704.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8" style="display: flex;align-items: center;">
                                <div class="card-body">
                                    <h5 class="card-title">Tareas</h5>
                                    <p class="card-text">¡Despierta tu potencial y deja que tus acciones hablen por ti en este proyecto! Cada tarea completada es un paso hacia el éxito. ¡Tú tienes el poder de hacerlo realidad! 🚀</p>
                                    <a class="btn btn-primary" href="{{ route('tareas.index')}}" role="button" style="width: 30%;">Vamos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::user()->rol == "Admin")
                <div style="width: 50%;">
                    <div class="card mb-3" style="max-width: 540px;" style="display: flex;align-items: center;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.pexels.com/photos/3184423/pexels-photo-3184423.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8" style="display: flex;align-items: center;">
                                <div class="card-body">
                                    <h5 class="card-title">Usuarios</h5>
                                    <p class="card-text">¡A darle caña al control de usuarios! 💪✨ Tu gestión es clave para mantener nuestra aplicación en la cima. ¡Crea, organiza y lidera con éxito! 🚀🔑</p>
                                    <a class="btn btn-primary" href="{{ route('users.index')}}" role="button" style="width: 30%;">Continuar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif
