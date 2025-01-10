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
    
     public function procesar(Request $request)
     {
         // Obtiene las selecciones del formulario
         $selecciones = $request->input('income', []);
 
         if (empty($selecciones)) {
             return redirect()->back()->with('error', 'Debes seleccionar al menos una opción.');
         }
 
         // Procesa cada selección y redirige según sea necesario
         foreach ($selecciones as $seleccion) {
             switch ($seleccion) {
                 case 'asalariado':
                     // Redirige a preguntas relacionadas con asalariado
                     return redirect()->route('inscripcion.asalariado');
                 case 'jubilado':
                     // Redirige a preguntas relacionadas con jubilados
                     return redirect()->route('inscripcion.jubilado');
                 case 'profesional':
                     // Redirige a preguntas relacionadas con profesionales
                     return redirect()->route('inscripcion.profesional');

                case 'rentas':
                        // Redirige a preguntas relacionadas con profesionales
                        return redirect()->route('inscripcion.rentas');
                case 'ActividadesEmpre':
                        // Redirige a preguntas relacionadas con profesionales
                        return redirect()->route('inscripcion.ActividadesEmpre');
                 default:
                     return redirect()->back()->with('error', 'Selección no válida.');
             }
         }
     }
 
     public function asalariado()
     {
         // Retorna la vista para preguntas relacionadas con asalariados
         return view('contaito.inscripcion.asalariado');
     }
 
     public function jubilado()
     {
         // Retorna la vista para preguntas relacionadas con jubilados
         return view('contaito.inscripcion.jubilado');
     }
 
     public function profesional()
     {
         // Retorna la vista para preguntas relacionadas con servicios profesionales
         return view('contaito.inscripcion.profesiona');
     }

     public function rentas()
     {
         // Retorna la vista para preguntas relacionadas con servicios profesionales
         return view('contaito.inscripcion.rentas');
     }

     public function ActividadesEmpre()
     {
         // Retorna la vista para preguntas relacionadas con servicios profesionales
         return view('contaito.inscripcion.ActividadesEmpre');
     }

     public function preguntasProfe()
     {
         // Retorna la vista para preguntas relacionadas con servicios profesionales
         return view('contaito.inscripcion.PreguntasProfe');
     }
     public function Seleccionable()
     {
         // Retorna la vista para preguntas relacionadas con servicios profesionales
         return view('contaito.inscripcion.Seleccionable');
     }

     public function PlataformasTecnologicas()
     {
         // Retorna la vista para preguntas relacionadas con servicios profesionales
         return view('contaito.inscripcion.PlataformasTecnologicas');
     }

     public function porciento()
{
    // Datos simulados para la vista
    $actividades = [
        ['id' => 1, 'descripcion' => 'Alquiler de Viviendas amuebladas'],
        ['id' => 2, 'descripcion' => 'Servicios Profesionales'],
    ];

    // Cambia la ruta a tu vista
    return view('contaito.inscripcion.Porciento', compact('actividades'));
}

public function Preguntasadicionales()
{
    // Retorna la vista ubicada en resources/views/contaito/inscripcion/PreguntasProfe.blade.php
    return view('contaito.inscripcion.Preguntasadicionales');
}

public function Preguntasadicionales_B()
{
    // Retorna la vista ubicada en resources/views/contaito/inscripcion/PreguntasProfe.blade.php
    return view('contaito.inscripcion.Preguntasadicionales_B');
}

public function Preguntasadicionales_c()
{
    // Retorna la vista ubicada en resources/views/contaito/inscripcion/PreguntasProfe.blade.php
    return view('contaito.inscripcion.Preguntasadicionales_c');
}

public function Preguntasadicionales_D()
{
    // Retorna la vista ubicada en resources/views/contaito/inscripcion/PreguntasProfe.blade.php
    return view('contaito.inscripcion.Preguntasadicionales_D');
}

public function RescursosNaturales()
{
    // Retorna la vista ubicada en resources/views/contaito/inscripcion/PreguntasProfe.blade.php
    return view('contaito.inscripcion.RescursosNaturales');
}

public function RescursosNaturalesB()
{
    // Retorna la vista ubicada en resources/views/contaito/inscripcion/PreguntasProfe.blade.php
    return view('contaito.inscripcion.RescursosNaturalesB');
}

public function PaginaRFC()
{
    // Retorna la vista ubicada en resources/views/contaito/inscripcion/PreguntasProfe.blade.php
    return view('contaito.inscripcion.PaginaRFC');
}

public function Servicios()
{
    // Retorna la vista ubicada en resources/views/contaito/inscripcion/PreguntasProfe.blade.php
    return view('contaito.inscripcion.Servicios');
}

public function ServiciosB()
{
    // Retorna la vista ubicada en resources/views/contaito/inscripcion/PreguntasProfe.blade.php
    return view('contaito.inscripcion.ServiciosB');
}


    public function guardar(Request $request)
    {
        // Recupera los datos seleccionados
        $selecciones = $request->input('income', []);

        // Obtiene el array de movimientos actual de la sesión o inicializa uno vacío
        $movimientos = session('movimientos', []);

        // Agrega las nuevas selecciones al array
        foreach ($selecciones as $seleccion) {
            $movimientos[] = $seleccion;
        }

        // Actualiza la sesión con el nuevo array de movimientos
        session(['movimientos' => $movimientos]);

        // Redirige a la vista actual o a otra vista con un mensaje de éxito
        return redirect()->back()->with('success', 'Movimientos guardados correctamente.');
    }

    public function mostrar()
    {
        // Obtiene el array de movimientos de la sesión
        $movimientos = session('movimientos', []);

        return view('inscripcion.mostrar', compact('movimientos'));
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
