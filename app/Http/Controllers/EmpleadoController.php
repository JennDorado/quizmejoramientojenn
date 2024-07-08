<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::with('departamento')->get();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('empleados.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->tfno = $request->tfno;
        $empleado->num_hijos = $request->num_hijos;
        $empleado->NIF = $request->NIF;
        $empleado->departamento_id = $request->departamento_id;
        $empleado->save();

        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        $empleado = Empleado::with('departamento')->findOrFail($empleado->id);
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        $empleado = Empleado::findOrFail($empleado->id);
        $departamentos = Departamento::all();
        return view('empleados.edit', compact('empleado', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado = Empleado::findOrFail($empleado->id);
        $empleado->nombre = $request->nombre;
        $empleado->tfno = $request->tfno;
        $empleado->num_hijos = $request->num_hijos;
        $empleado->NIF = $request->NIF;
        $empleado->departamento_id = $request->departamento_id;
        $empleado->save();

        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado = Empleado::findOrFail($empleado->id);
        $empleado->delete();

        return redirect()->route('empleados.index');
    }
}
