<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'num_personas' => 'required|integer',
            'valor_hora' => 'required|integer',
        ]);

        // Crear una nueva instancia del modelo Datos
        $datos = new Datos();
        $datos->num_personas = $request->num_personas;
        $datos->valor_hora = $request->valor_hora;
        $datos->save();

        // Redireccionar a donde lo necesites
        return redirect()->back()->with('success', 'Datos adicionales agregados correctamente.');

        // Redireccionar al index o a donde lo necesites
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
    public function destroy(Datos $dato)
    {
        $dato->delete();

        // Redireccionar de vuelta al index con un mensaje de éxito
        return redirect()->route('calculadora.index')->with('success', 'Datos eliminados correctamente.');
    }
}
