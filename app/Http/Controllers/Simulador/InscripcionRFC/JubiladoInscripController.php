<?php

namespace App\Http\Controllers\Simulador\InscripcionRFC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Actividade;
use App\Models\Inscripcione;
use App\Models\User;
use App\Models\ObligacioneActividad;
use Illuminate\Support\Facades\Auth;

class JubiladoInscripController extends Controller
{

    public $actividadEconomica;
    
     public function procesarJubilado(Request $request)
     {
         // Obtener la actividad "Pensionado" desde la base de datos
         $actividadPensionado = Actividade::where('categoria', 'Pensionado')->first(); // Ajusta 'Pensionado' si el nombre es diferente
     
         // Verificar si se encontró la actividad
         if (!$actividadPensionado) {
             return redirect()->route('home')->withErrors('No se encontró la actividad de pensionado.');
         }
     
         // Crear un arreglo con la información de la actividad "Pensionado"
         $filteredActivities = [
             [
                 'id_actividad' => $actividadPensionado->id,
                 'porcentaje' => 100, // Asumiendo que el porcentaje para pensionado es siempre 100%
                 'forma_actividad' => 'No aplica', // Puedes ajustar esto según tu lógica
             ]
         ];
     
         // Guardar el arreglo en la sesión
         session(['filteredActivities' => $filteredActivities]);
     
         // Obtener las obligaciones asociadas a la actividad "Pensionado"
         $obligaciones = ObligacioneActividad::query()
             ->join('obligaciones', 'obligaciones.id', '=', 'obligacione_actividades.obligacione_id')
             ->select('obligaciones.nombre as nombre', 'obligaciones.clave as clave', 'obligaciones.descripcion as descripcion')
             ->where('obligacione_actividades.actividade_id', $actividadPensionado->id)
             ->distinct()
             ->get();
     
         // Obtener el régimen de la actividad "Pensionado"
         $regimen = Actividade::query()
             ->join('regimenes', 'regimenes.id', '=', 'actividades.regimene_id')
             ->select('regimenes.nombre as nombre')
             ->where('actividades.id', $actividadPensionado->id)
             ->first();
     
         return view('contaito.inscripcion.Jubilado.mostrarObligacionesProfe', compact('actividadPensionado', 'obligaciones', 'regimen'));
     }
     


    public function inscribirJubilado(Request $request)
    {
        // Recuperar el arreglo desde la sesión
        $filteredActivities = session('filteredActivities', []);

        // Si el arreglo está vacío, redirigir con un mensaje de error
        if (empty($filteredActivities)) {
            return redirect()->route('inscripcion.procesarJubilado')->withErrors('No se encontraron actividades para procesar.');
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
