<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TareaRequest;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tareas = Tarea::paginate(4);
        $cantidad = Tarea::count();
        $proyectos = Proyecto::all();
        $users = User::all();
        return view('tarea.index', compact('tareas','cantidad','proyectos','users'))
            ->with('i', ($request->input('page', 1) - 1) * $tareas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tarea = new Tarea();
        $proyectos = Proyecto::all();
        $users = User::all();
        return view('tarea.create', compact('tarea','proyectos','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TareaRequest $request): RedirectResponse
    {
        Tarea::create($request->validated());

        return Redirect::route('tareas.index')
            ->with('success', 'Tarea created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tarea = Tarea::find($id);
        $proyectos = Proyecto::all();
        $users = User::all();
        return view('tarea.show', compact('tarea','proyectos','users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tarea = Tarea::find($id);
        $proyectos = Proyecto::all();
        $users = User::all();
        return view('tarea.edit', compact('tarea','proyectos','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TareaRequest $request, Tarea $tarea): RedirectResponse
    {
        $tarea->update($request->validated());

        return Redirect::route('tareas.index')
            ->with('success', 'Tarea updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Tarea::find($id)->delete();

        return Redirect::route('tareas.index')
            ->with('success', 'Tarea deleted successfully');
    }
}
