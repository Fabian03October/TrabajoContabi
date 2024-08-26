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






    // Añadimos las rutas para el controlador de facturas
    Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
    Route::post('/invoices', [InvoiceController::class, 'store'])->name('invoices.store');
});