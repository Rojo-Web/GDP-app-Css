<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProyectoRequest;
use App\Models\UsuarioProyecto;
use App\Models\Tarea;
use App\Models\usuarioProyecto as ModelsUsuarioProyecto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $proyectos = Proyecto::paginate(4);
        $usuarioProyecto = UsuarioProyecto::paginate();

        $usuarios = User::paginate();
        $cantidadTareas = Tarea::all();
        $cantidad = Proyecto::count();
        return view('proyecto.index', compact('proyectos', 'usuarioProyecto', 'usuarios','cantidadTareas','cantidad'))
            ->with('i', ($request->input('page', 1) - 1) * $proyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $proyecto = new Proyecto();
        $users = User::all();

        return view('proyecto.create', compact('proyecto', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProyectoRequest $request): RedirectResponse
    {
        // Crear el proyecto y obtener su ID
        $proyecto = Proyecto::create($request->validated());
        $id = $proyecto->id;
        foreach ($request->integrantes as $integrante) {
            $usuarioProyecto = new UsuarioProyecto();
            $usuarioProyecto->proyecto_id = $id;
            $usuarioProyecto->user_id = $integrante;
            $usuarioProyecto->save();
        }
        return Redirect::route('proyectos.index')
            ->with('success', 'Proyecto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $proyecto = Proyecto::find($id);
        $usuarioProyecto = UsuarioProyecto::paginate();
        $usuarios = User::paginate();
        return view('proyecto.show', compact('proyecto', 'usuarioProyecto', 'usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $proyecto = Proyecto::find($id);
        $users = User::all();

        return view('proyecto.edit', compact('proyecto', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProyectoRequest $request, Proyecto $proyecto): RedirectResponse
    {
        $proyecto->update($request->validated());

        // Verificar si se seleccionó algo en el campo de múltiples opciones
        if ($request->filled('integrantes')) {
            // Crear el proyecto y obtener su ID
            $id = $proyecto->id;
            //Se borran los registros anteriores
            UsuarioProyecto::where('proyecto_id', $id)->delete();
            foreach ($request->integrantes as $integrante) {
                $usuarioProyecto = new UsuarioProyecto();
                $usuarioProyecto->proyecto_id = $id;
                $usuarioProyecto->user_id = $integrante;
                $usuarioProyecto->save();
            }
        }


        return Redirect::route('proyectos.index')
            ->with('success', 'Proyecto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Proyecto::find($id)->delete();

        return Redirect::route('proyectos.index')
            ->with('success', 'Proyecto deleted successfully');
    }
}
