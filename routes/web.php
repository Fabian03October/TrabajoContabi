<?php

use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EscuelaController;
use App\Http\Controllers\nombreController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Simulador\InscripcionController;
use App\Http\Controllers\Simulador\FacturaController;

use Mews\Captcha\Captcha;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/nombre', [nombreController::class, 'index']);

// Creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('escuelas', EscuelaController::class);
    Route::get('/usuarios-activos', [UsuarioController::class, 'activos'])->name('usuarios.activos');
    Route::get('usuarios/{id}', [UsuarioController::class, 'show'])->name('usuarios.show');
    Route::post('usuarios/activate/{id}', [UsuarioController::class, 'activate'])->name('usuarios.activate');
    Route::get('usuarios/{id}/pdf', [UsuarioController::class, 'pdf'])->name('usuarios.pdf');
    Route::get('usuarios/{id}/desactivar', [UsuarioController::class, 'desactivar'])->name('usuarios.deactivate');

    //Rutas para la inscripción de un contribuyente a regimen
    Route::resource('inscripcion', InscripcionController::class);

    //Rutas para la facturacion
    Route::resource('facturacion', FacturaController::class);
    Route::post('/guardar-factura', [FacturaController::class, 'guardarFactura'])->name('guardar.factura');


    Route::post('/tipos-ingreso', [InscripcionController::class, 'select'])->name('inscripcion.select');
    // Añadimos las rutas para el controlador de facturas
    Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
    Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
});

//rutas para usar el captcha de inscripcion al regimen
Route::get('captcha', [Captcha::class, 'create'])->name('captcha');
Route::post('/verificar-codigo', [InscripcionController::class, 'verificarCodigo'])->name('verificar.codigo');


Route::post('/simulador/procesar', [InscripcionController::class, 'procesar'])->name('inscripcion.procesar');
Route::get('/simulador/asalariado', [InscripcionController::class, 'asalariado'])->name('inscripcion.asalariado');
Route::get('/simulador/jubilado', [InscripcionController::class, 'jubilado'])->name('inscripcion.jubilado');
Route::get('/simulador/profesional', [InscripcionController::class, 'profesional'])->name('inscripcion.profesional');
Route::get('/simulador/Renta', [InscripcionController::class, 'rentas'])->name('inscripcion.rentas');

Route::get('/simulador/PreguntasProfe', [InscripcionController::class, 'PreguntasProfe'])->name('inscripcion.PreguntasProfe');

//la ruta de la vista de empresas
Route::get('/simulador/ActividadesEmpresariales', [InscripcionController::class, 'ActividadesEmpre'])->name('inscripcion.ActividadesEmpre');

//la ruta de porcientos
Route::get('/simulador/porciento', [InscripcionController::class, 'porciento'])->name('inscripcion.porciento');

// Preguntas adicionales de la empresa
Route::get('/simulador/Preguntasadicionales', [InscripcionController::class, 'Preguntasadicionales'])->name('inscripcion.Preguntasadicionales');

// seleccionable
Route::get('/simulador/Seleccionable', [InscripcionController::class, 'Seleccionable'])->name('inscripcion.Seleccionable');

//PlataformasTecnologicas
Route::get('/simulador/PlataformasTecnologicas', [InscripcionController::class, 'PlataformasTecnologicas'])->name('inscripcion.PlataformasTecnologicas');

// Preguntas adicionales 2
Route::get('/simulador/Preguntasadicionales_B', [InscripcionController::class, 'Preguntasadicionales_B'])->name('inscripcion.Preguntasadicionales_B');

// Preguntas adicionales 3
Route::get('/simulador/Preguntasadicionales_c', [InscripcionController::class, 'Preguntasadicionales_c'])->name('inscripcion.Preguntasadicionales_c');

// Preguntas adicionales 4
Route::get('/simulador/Preguntasadicionales_D', [InscripcionController::class, 'Preguntasadicionales_D'])->name('inscripcion.Preguntasadicionales_D');

//RescursosNaturales
Route::get('/simulador/RescursosNaturales', [InscripcionController::class, 'RescursosNaturales'])->name('inscripcion.RescursosNaturales');

//RescursosNaturales
Route::get('/simulador/RescursosNaturalesB', [InscripcionController::class, 'RescursosNaturalesB'])->name('inscripcion.RescursosNaturalesB');

//PaginaRFC
Route::get('/simulador/PaginaRFC', [InscripcionController::class, 'PaginaRFC'])->name('inscripcion.PaginaRFC');

//Servicios
Route::get('/simulador/Servicios', [InscripcionController::class, 'Servicios'])->name('inscripcion.Servicios');

//Servicios
Route::get('/simulador/ServiciosB', [InscripcionController::class, 'ServiciosB'])->name('inscripcion.ServiciosB');