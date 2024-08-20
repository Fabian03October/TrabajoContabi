<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
//agregamos lo siguiente
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Sin paginación
        $usuarios = User::all()->where('status',0);
        return view('usuarios.index',compact('usuarios'));

        //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $usuarios->links() !!}
    }

        public function activos(Request $request)
    {
        // Filtrar usuarios activos (status = 1)
        $usuarios = User::where('status', 1)->get();

        return view('usuarios.activos', compact('usuarios'));
    }


    public static function homoclave(){
        $homoclave = Str::random(3);

        return $homoclave;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //aqui trabajamos con name de las tablas de users
        $roles = Role::pluck('name','name')->all();
        return view('usuarios.crear',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validación de los datos del formulario
    $this->validate($request, [
        'name' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'apellido_p' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'apellido_m' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'curp' => ['required', 'string', 'size:18', 'regex:/^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/'],
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'roles' => 'required|array'
    ]);

    // Recopilar todos los datos del formulario
    $input = $request->all();

    // Encriptar la contraseña
    $input['password'] = Hash::make($input['password']);

    // Establecer el campo status a 1 para indicar que el usuario está activo
    $input['status'] = 1;

    // Crear el nuevo usuario en la base de datos
    $user = User::create($input);

    // Asignar los roles seleccionados al usuario
    $user->assignRole($request->input('roles'));

    // Redireccionar al índice de usuarios con un mensaje de éxito
    return redirect()->route('usuarios.index')->with('success', 'Contribuyente ' . $request->name . ' registrado exitosamente.');
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
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('usuarios.editar',compact('user','roles','userRole'));
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
    // Validación de los datos del formulario
    $this->validate($request, [
        'name' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'apellido_p' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'apellido_m' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'curp' => ['required', 'string', 'size:18', 'regex:/^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/'],
        'rfc' => ['required', 'string', 'size:13', 'regex:/^[A-Z]{3,4}\d{6}[A-Z0-9]{3}$/'],
        'status' => 'boolean', // Validación como booleano
        'fecha_nacimiento' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|same:confirm-password', // Contraseña opcional
        'roles' => 'required|array'
    ]);

    $input = $request->all();

    // Convertir 'status' a valor booleano
    $input['status'] = $request->has('status') ? true : false;

    // Encriptar la contraseña si se ha proporcionado
    if (!empty($input['password'])) {
        $input['password'] = Hash::make($input['password']);
    } else {
        // Eliminar la contraseña del array de entrada si no se proporciona
        $input = Arr::except($input, ['password']);
    }

    // Encontrar el usuario y actualizarlo
    $user = User::findOrFail($id);
    $user->update($input);

    // Eliminar los roles actuales y asignar los nuevos roles
    DB::table('model_has_roles')->where('model_id', $id)->delete();
    $user->assignRole($request->input('roles'));

    return redirect()->route('usuarios.index')->with('success', 'Cotribuyente ' . $request->name . ' actualizado exitosamente.');
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('usuarios.index');
    }
}
