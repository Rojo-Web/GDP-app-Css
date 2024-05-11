@extends('layouts.app')

@section('template_title')
Resultados de la Calculadora
@endsection

@section('content')
<div class="container">
    <h1 class="fw-bold text-center" style="color:#198754;">Resultados de la Calculadora</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Esfuerzo Total de las Tareas: {{ $esfuerzoTotal }}</h3>
                    <h3>Resultado: ${{ $resultado }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detalles del Proyecto
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Desarrolladores</td>
                                <td>${{ $desarrollo }}</td>
                            </tr>
                            <tr>
                                <td>Gastos Fijos</td>
                                <td>${{ $gastosFijos }}</td>
                            </tr>
                            <tr>
                                <td>Gastos Adicionales</td>
                                <td>${{ $gastosAdicionales }}</td>
                            </tr>
                            <tr>
                                <td>Ganancia</td>
                                <td>${{ $ganancia }}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>${{ $resultado }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection