@extends('layouts.app')

@section('template_title')
Agregar Tarea
@endsection

@section('content')
<div class="container">
    <h1 class="fw-bold text-center" style="color:#198754;">Agregar Tarea</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos de la Tarea
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('calculadora.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre de la Tarea:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="esfuerzo" class="form-label">Esfuerzo:</label>
                            <select class="form-select" id="esfuerzo" name="esfuerzo" required>
                                <option value="4">Simple</option>
                                <option value="8">Muy Fácil</option>
                                <option value="16">Fácil</option>
                                <option value="24">Normal</option>
                                <option value="32">Difícil</option>
                                <option value="40">Muy Difícil</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Tarea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection