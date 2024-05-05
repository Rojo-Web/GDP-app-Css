@extends('layouts.app')

@section('template_title')
{{ $tarea->name ?? __('Show') . " " . __('Tarea') }}
@endsection
@if (Auth::check())
@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Tarea</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('tareas.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body bg-white">

                    <div class="form-group mb-2 mb20">
                        <strong>Nombre:</strong>
                        {{ $tarea->nombre }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Estado:</strong>
                        {{ $tarea->estado }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Descripcion:</strong>
                        {{ $tarea->descripcion }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Fecha Inicio:</strong>
                        {{ $tarea->fecha_inicio }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Fecha Final:</strong>
                        {{ $tarea->fecha_final }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Responsable:</strong>
                        @foreach ($users as $usuarioR)
                        @if($usuarioR->cedula == $tarea->responsable_id)
                        {{$usuarioR->name}}
                        @else
                        @endif
                        @endforeach
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Proyecto:</strong>
                        @foreach ($proyectos as $proyecto)
                        @if($proyecto->id == $tarea->proyecto_id)
                        {{$proyecto->nombre}}
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
