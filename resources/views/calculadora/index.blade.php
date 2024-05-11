@extends('layouts.app')

@section('template_title')
Tareas
@endsection

@section('content')
<div class="container">
    <h1 class="fw-bold text-center" style="color:#198754;">Tareas</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    Lista de Tareas
                </div>
                <div class="card-body">
                    <a href="{{ route('calculadora.create') }}" class="btn btn-primary mb-3">Agregar Tarea</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Esfuerzo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí puedes iterar sobre las tareas -->
                            @foreach($tareas as $tarea)
                            <tr>
                                <td>{{ $tarea->nombre }}</td>
                                <td>{{ $tarea->esfuerzo }}</td>
                                <td>
                                    <form action="{{ route('calculadora.destroy', $tarea->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    Datos Adicionales
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('datos.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="num_personas" class="form-label">Número de Recursos:</label>
                            <input type="number" class="form-control" id="num_personas" name="num_personas" required>
                        </div>
                        <div class="mb-3">
                            <label for="valor_hora" class="form-label">Valor por Hora:</label>
                            <input type="number" class="form-control" id="valor_hora" name="valor_hora" required>
                        </div>
                        @if ($datos->isEmpty())
                        <button type="submit" class="btn btn-primary mb-3">Agregar</button>
                        @else
                        <button type="submit" class="btn btn-primary mb-3" disabled>Agregar</button>
                        @endif
                    </form>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    Datos Adionales
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Número de Personas</th>
                                <th>Valor por Hora</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datos as $dato)
                            <tr>
                                <td>{{ $dato->num_personas }}</td>
                                <td>{{ $dato->valor_hora }}</td>
                                <td>
                                    <form action="{{ route('datos.destroy', $dato->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2">No hay datos disponibles</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection