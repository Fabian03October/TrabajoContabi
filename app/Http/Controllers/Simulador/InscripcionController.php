<?php

namespace App\Http\Controllers\Simulador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contaito.inscripcion.index');
        // return view('contaito.inscripcion.list_ingresos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contaito.inscripcion.create');
    }

    public function crear()
    {
        return view('contaito.inscripcion.create');
    }

    public function select(Request $request)
    {
        // Obtener los IDs seleccionados de los checkboxes
        $selectedIncomeIds = $request->input('income', []);
        dd($selectedIncomeIds);
        // Procesa los IDs seleccionados según sea necesario
        // Ejemplo: almacenar en base de datos, enviar por correo, etc.

        // Redirige o muestra una vista con un mensaje de éxito
        // return redirect()->route('ruta.deseada')->with('success', 'Tipos de ingreso guardados exitosamente.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function verificarCodigo(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha', // validación del CAPTCHA
            // otras validaciones...
        ]);
        // Lógica adicional si el CAPTCHA es válido...

        return view('contaito.inscripcion.list_ingresos');
        // return redirect()->back()->with('success', 'Código verificado correctamente.');
    }
}
