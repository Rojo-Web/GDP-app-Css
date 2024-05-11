<?php

namespace App\Http\Controllers;

use App\Models\Calculadora;
use App\Models\Datos;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Calculadora::all(); // Obtener todas las tareas
        $cantidad = $tareas->count(); // Calcular la cantidad total de tareas

        $datos = Datos::all(); // Obtener todos los datos adicionales

        return view('calculadora.index', compact('tareas', 'cantidad', 'datos'));
    }

    public function resultados()
    {
        // Obtener todas las tareas
        $tareas = Calculadora::all();

        // Obtener los datos adicionales
        $datos = Datos::first(); // Suponiendo que solo hay un conjunto de datos adicionales

        // Calcular el esfuerzo total
        $esfuerzoTotal = $tareas->sum('esfuerzo');

        // Calcular el resultado multiplicando el esfuerzo total por el número de personas y el valor por hora
        $resultado = $esfuerzoTotal * $datos->num_personas * $datos->valor_hora;

        // Devolver los resultados a la vista
        return view('calculadora.resultados', compact('esfuerzoTotal', 'resultado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('calculadora.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'esfuerzo' => 'required|numeric',
        ]);

        Calculadora::create($request->all());

        return redirect()->route('calculadora.index')
            ->with('success', 'Tarea creada correctamente.');
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
        $tarea = Calculadora::findOrFail($id);

        // Eliminar la tarea
        $tarea->delete();

        // Redireccionar de vuelta a la página index con un mensaje de éxito
        return redirect()->route('calculadora.index')->with('success', 'Tarea eliminada correctamente.');
    }
}
