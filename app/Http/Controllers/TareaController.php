<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TareaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tareas = Tarea::paginate();

        return view('tarea.index', compact('tareas'))
            ->with('i', ($request->input('page', 1) - 1) * $tareas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tarea = new Tarea();

        return view('tarea.create', compact('tarea'));
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

        return view('tarea.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tarea = Tarea::find($id);

        return view('tarea.edit', compact('tarea'));
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
