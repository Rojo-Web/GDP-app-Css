@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? __('Show') . " " . __('Proyecto') }}
@endsection
@if (Auth::check())
@if (Auth::user()->rol == "Admin" || Auth::user()->rol == "Gestor")
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('proyectos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $proyecto->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $proyecto->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $proyecto->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Inicio:</strong>
                                    {{ $proyecto->fecha_inicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Final:</strong>
                                    {{ $proyecto->fecha_final }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lider Id:</strong>
                                    {{ $proyecto->lider_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Integrantes: </strong>
                                    @foreach ($usuarioProyecto as $usuarioP)
                                        @if($usuarioP->proyecto_id == $proyecto->id)
                                        @foreach ($usuarios as $usuario)
                                        @if($usuario->cedula == $usuarioP->user_id)
                                        {{$usuario->name}},
                                        @else
                                        @endif
                                        @endforeach
                                        @else
                                        @endif
                                        @endforeach
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No tienes permisos para entrar a esta pagina</h1>
@endsection
@endif
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif
