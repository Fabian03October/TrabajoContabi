<?php

namespace App\Http\Controllers\Simulador\InscripcionRFC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Actividade;
use App\Models\Inscripcione;
use App\Models\User;
use App\Models\ObligacioneActividad;
use Illuminate\Support\Facades\Auth;

class AsalariadoInscripController extends Controller
{

    public $actividadEconomica;
    // private $filteredActivities = [];

    public function asalariado()
     {
        $actividades = Actividade::where('categoria', 'Asalariado')->get(); 
        return view('contaito.inscripcion.Asalariado.asalariado', compact('actividades')); 
     }

     //funcion para mandar a la vita de porcentajes las activiades seleccionadas
     public function porcientoAsalariado(Request $request)
     {
         // Validar que el array de actividades exista y que los IDs sean válidos
         $validatedData = $request->validate([
             'actividades' => 'required|array|min:1',
             'actividades.*' => 'exists:actividades,id', // Valida que los IDs existan en la tabla
         ]);

         // Obtener las actividades seleccionadas desde la base de datos
         $actividades = Actividade::whereIn('id', $request->actividades)->get();
        //  $this->actividadEconomica=$actividades;
        //  dd($this->numeros);
         // Redirigir a la vista con las actividades seleccionadas
         return view('contaito.inscripcion.Asalariado.porcentajes', compact('actividades'));
     }

     //Funcion para procesar los porcentajes y mandar a la vista de obligaciones
     public function procesarAsalariado(Request $request)
    {
        $actividadIds = $request->input('actividad_id');
        $porcentajes = $request->input('porcentaje');
        $formasActividad = $request->input('forma_actividad');

        $filteredActivities = []; // Inicializar el arreglo local

        foreach ($actividadIds as $index => $id) {
            $activityRow = $request->input('deleted_' . $id);

            if (!$activityRow) {
                $filteredActivities[] = [
                    'id_actividad' => $id,
                    'porcentaje' => $porcentajes[$index],
                    'forma_actividad' => $formasActividad[$index],
                ];
            }
        }

        // Guardar el arreglo en la sesión
        session(['filteredActivities' => $filteredActivities]);

        $actividades = Actividade::whereIn('id', array_column($filteredActivities, 'id_actividad'))->get();

        $obligaciones = ObligacioneActividad::query()
            ->join('obligaciones', 'obligaciones.id', '=', 'obligacione_actividades.obligacione_id')
            ->select('obligaciones.nombre as nombre', 'obligaciones.clave as clave', 'obligaciones.descripcion as descripcion')
            ->whereIn('obligacione_actividades.actividade_id', $actividades->pluck('id'))
            ->distinct()
            ->get();

        $regimen = Actividade::query()
            ->join('regimenes', 'regimenes.id', '=', 'actividades.regimene_id')
            ->select('regimenes.nombre as nombre')
            ->where('actividades.id', $actividades->first()->id)
            ->first();

        return view('contaito.inscripcion.Asalariado.mostrarObligacionesProfe', compact('actividades', 'obligaciones', 'regimen'));
    }


    public function inscribirAsalariado(Request $request)
    {
        // Recuperar el arreglo desde la sesión
        $filteredActivities = session('filteredActivities', []);

        // Si el arreglo está vacío, redirigir con un mensaje de error
        if (empty($filteredActivities)) {
            return redirect()->route('inscripcion.procesarAsalariado')->withErrors('No se encontraron actividades para procesar.');
        }
        // dd(Auth::user()->id);
        // Procesar las actividades
        foreach ($filteredActivities as $activity) {
            Inscripcione::create([
                'fecha_inicio' => now(), //fecha actual
                'fecha_fin' =>null,
                'porcentaje' => $activity['porcentaje'], // Porcentaje desde el arreglo
                'user_id' => Auth::user()->id,      // ID del usuario autenticado
                'actividade_id' => $activity['id_actividad'], // ID de la actividad
                // 'forma_actividad' => $activity['forma_actividad'], // Forma de actividad desde el arreglo

                // Agrega más campos aquí según lo necesario
            ]);
        }

        // Limpiar el arreglo de la sesión
        session()->forget('filteredActivities');

        return redirect()->route('home')->with('success', 'Actividades inscritas correctamente.');
    }


}
