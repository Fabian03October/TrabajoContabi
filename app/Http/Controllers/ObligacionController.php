<?php

namespace App\Http\Controllers;

use App\Models\Obligacione;
use Illuminate\Http\Request;

class ObligacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obligaciones = Obligacione::all();
        return view('contaito.crudActividades.Obligaciones.index', compact('obligaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('contaito.crudActividades.Obligaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'regex:/^[\pL\s\(\)\.\,\-áéíóúÁÉÍÓÚ]+$/u'],
            'clave' => 'required|numeric',
            'descripcion' => 'nullable|string|max:255', // Opcional y de tipo text
        ]);

        // Crear la actividad
        Obligacione::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()
            ->route('obligaciones.index') // Ajusta según la ruta de tu lista de actividades
            ->with('success', 'Obligación registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obligacion = Obligacione::findOrFail($id);

        return view('contaito.crudActividades.Obligaciones.show', compact('obligacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($obligacion)
    {
        $obligacion = Obligacione::find($obligacion);

        return view('contaito.crudActividades.Obligaciones.edit', compact('obligacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => ['required', 'regex:/^[\pL\s\(\)\.\-áéíóúÁÉÍÓÚ]+$/u'],
            'clave' => 'required|numeric',
            'descripcion' => 'nullable|string|max:255', // Opcional y de tipo text
        ]);

        $obligacion = Obligacione::findOrFail($id);
        $obligacion->update($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()
            ->route('obligaciones.index') // Ajusta según la ruta de tu lista de actividades
            ->with('success', 'Obligaciones actualizada exitosamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
