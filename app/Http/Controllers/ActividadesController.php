<?php

namespace App\Http\Controllers;

use App\Models\Actividade;
use App\Models\Obligacione;
use App\Models\ObligacioneActividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActividadesController extends Controller
{
    public $arreglo = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Actividade::query()
                    ->join('regimenes','regimenes.id','=','actividades.regimene_id')
                    ->join('tipopersonas','tipopersonas.id','=','actividades.tipopersona_id')
                    ->select('actividades.id as id', 'actividades.nombre as nombre', 'actividades.clave as clave', 'regimenes.nombre as regimen','tipopersonas.nombre as tipopersona');

          // Aplicar filtros según la solicitud
          if (!$request->has('reset_filtro')) {
            $filtro = $request->get('filtro');
            switch ($filtro) {
                case 'filtro1':
                    $query->where('actividades.tipopersona_id', '=', 1);
                    break;
                case 'filtro2':
                    $query->where('actividades.tipopersona_id', '=', 2);
                    break;
                // case 'filtro3':
                //     $query->where('intermedias.palenque_id', '=', 3);
                //     break;
                // case 'filtro4':
                //     $query->where('intermedias.palenque_id', '=', 4);
                //     break;
                // case 'filtro5':
                //     $query->where('intermedias.palenque_id', '=', 5);
                //     break;
                // case 'filtro6':
                //     $query->where('intermedias.palenque_id', '=', 6);
                //     break;
                default:
                break;
            }
        }

        $actividades = $query->get();

        return view('contaito.crudActividades.Actividades.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('contaito.crudActividades.Actividades.create');
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
            'nombre' => ['required', 'regex:/^[\pL\s]+$/u'], // Solo letras y espacios
            'clave' => 'required|numeric',
            'descripcion' => 'nullable|string|max:255', // Opcional y de tipo texto
            'categoria' => ['required', 'regex:/^[\pL\s]+$/u'], // Letras y espacios
            'obligacion' => 'nullable|string|max:255', // Opcional y texto
            'tasa_impositiva' => 'required|numeric|min:0', // Numérico y positivo
            'periocidad_pago' => 'nullable|string|max:255', // Opcional
            'regimene_id' => 'required|integer|exists:regimenes,id', // Debe existir en la tabla correspondiente
            'tipopersona_id' => 'required|integer|exists:tipopersonas,id', // Debe existir en la tabla correspondiente
        ]);

        // Crear la actividad
        Actividade::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()
            ->route('actividades.index') // Ajusta según la ruta de tu lista de actividades
            ->with('success', 'Actividad registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $flag=true;
        $actividad = Actividade::query()
            ->join('regimenes','regimenes.id','=','actividades.regimene_id')
            ->join('tipopersonas','tipopersonas.id','=','actividades.tipopersona_id')
            ->select('actividades.id as id', 'actividades.nombre as nombre', 'actividades.clave as clave','actividades.categoria as categoria','actividades.tasa_impositiva as tasa_impositiva', 'regimenes.nombre as regimen','tipopersonas.nombre as tipopersona')
            ->where('actividades.id', '=', $id)
            ->first();

        // $bit = optional($acetica)->bita;
        // if (is_null($bit)) {
        //         $flag=false;
        // }

        return view('contaito.crudActividades.Actividades.show', compact('actividad'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($actividad)
    {
        $actividade = Actividade::find($actividad);
        // dd($actividade);
        return view('contaito.crudActividades.Actividades.edit', compact('actividade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $actividad)
    {
        $request->validate([
            'nombre' => ['required', 'regex:/^[\pL,.\s]+$/u'], // Solo letras y espacios
            'clave' => 'required|numeric',
            'descripcion' => 'nullable|string|max:255', // Opcional y de tipo texto
            'categoria' => ['required', 'regex:/^[\pL\s]+$/u'], // Letras y espacios
            'obligacion' => 'nullable|string|max:255', // Opcional y texto
            'tasa_impositiva' => 'required|numeric|min:0', // Numérico y positivo
            'periocidad_pago' => 'nullable|string|max:255', // Opcional
            'regimene_id' => 'required|integer|exists:regimenes,id', // Debe existir en la tabla correspondiente
            'tipopersona_id' => 'required|integer|exists:tipopersonas,id', // Debe existir en la tabla correspondiente
        ]);

        $actividad = Actividade::findOrFail($actividad);
        $actividad->update($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()
            ->route('actividades.index') // Ajusta según la ruta de tu lista de actividades
            ->with('success', 'Actividad registrada exitosamente.');
    }

    public function asignar($actividad)
{
    $actividade = Actividade::findOrFail($actividad);

    // Obtener las obligaciones asociadas a la actividad
    $obligacionesAsociadas = ObligacioneActividad::query()
                        ->join('obligaciones', 'obligaciones.id', '=', 'obligacione_actividades.obligacione_id')
                        ->where('obligacione_actividades.actividade_id', '=', $actividad)
                        ->pluck('obligacione_id')
                        ->toArray();

    $this->arreglo = $obligacionesAsociadas;  // Guardamos las obligaciones asociadas en el arreglo de clase

    // Obtener todas las obligaciones disponibles
    $obligaciones = \App\Models\Obligacione::all();

    return view('contaito.crudActividades.Actividades.asignar', compact('obligaciones', 'obligacionesAsociadas', 'actividade'));
}


public function asignarObligaciones(Request $request, $actividadId)
{
    // Validar las obligaciones seleccionadas
    $request->validate([
        'obligacion_id' => 'required|array', // Asegurarse de que se seleccionen al menos una obligación
        'obligacion_id.*' => 'exists:obligaciones,id', // Validar que cada obligación seleccionada existe en la tabla 'obligaciones'
    ]);

    $obligaciones = $request->input('obligacion_id');  // Este es el arreglo de entrada (obligaciones seleccionadas)

    //Esto es para eliminar el todas las obligaciones de la actividad asociadas
    $obligacionesAsociadas = ObligacioneActividad::query()
                        ->where('actividade_id', '=', $actividadId)
                        ->get();

    foreach ($obligacionesAsociadas as $obligacion) {
        // Eliminar el registro
        $obligacion->delete();
    }

    // Si hay nuevas obligaciones que no están asociadas, insertarlas en la tabla 'obligacione_actividades'
    if (!empty($obligaciones)) {
        foreach ($obligaciones as $obligacionId) {
            ObligacioneActividad::create([
                'actividade_id' => $actividadId,
                'obligacione_id' => $obligacionId
            ]);
        }
    }

    // Redirigir a la vista de actividades con un mensaje de éxito
    return redirect()->route('actividades.index')->with('success', 'Obligaciones asignadas correctamente.');
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("actividades")->where('id',$id)->delete();
        return redirect()->route('actividades.index');
    }
    public function eliminar($id)
    {
        DB::table('actividades')->whereId($id)->delete();

        return redirect()->route('actividades.index')->with('success', 'actividades eliminado exitosamente.');
    }

}
