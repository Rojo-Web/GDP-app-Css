<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;
use App\Models\Calculadora;


class resultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Calculadora::all();

        // Obtener los datos adicionales
        $datos = Datos::first(); // Suponiendo que solo hay un conjunto de datos adicionales

        // Calcular el esfuerzo total
        $esfuerzoTotal = $tareas->sum('esfuerzo');

        // Calcular el resultado multiplicando el esfuerzo total por el número de personas y el valor por hora
        $resultado = $esfuerzoTotal * $datos->valor_hora;

        $desarrollo = $resultado * 0.5;
        $gastosFijos = $resultado * 0.2;
        $gastosAdicionales = $resultado * 0.2;
        $ganancia = $resultado * 0.1;

        // Devolver los resultados a la vista
        return view('resultado.index', compact('esfuerzoTotal', 'resultado', 'desarrollo', 'gastosFijos', 'gastosAdicionales', 'ganancia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
