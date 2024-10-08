<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use App\Models\Domicilio;


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

    public function deactivate($id)
{
    $usuario = User::find($id);

    if ($usuario) {
        $usuario->status = 0; // Cambia el estado a desactivado
        $usuario->save();

        return redirect()->back()->with('success', 'Usuario desactivado correctamente.');
    }

    return redirect()->back()->with('error', 'Usuario no encontrado.');
}

    public function pdf($id)
    {
        $usuario = User::find($id);

        if (!$usuario) {
            return redirect()->route('usuarios.index')->with('error', 'Usuario no encontrado.');
        }

        $data = [
            'usuario' => $usuario,
        ];

        // $pdf = Pdf::loadView('usuarios.pdf', $data);
        // return $pdf->download('CSF_'.$usuario->nombres.'.pdf');
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('usuarios.pdf', $data);
        $pdf->set_option('defaultFont', 'Arial');
        return $pdf->stream('CSF-'. $usuario->name.'.pdf');
    }

    public function activos(Request $request)
    {
        // Filtrar usuarios activos (status = 1)
        $usuarios = User::where('status', 1)->get();

        return view('usuarios.activos', compact('usuarios'));
    }

    public function activate(Request $request, $id)
    {
        $user = User::findOrFail($id);

            // Generar el RFC a partir de los primeros 10 caracteres de la CURP y la homoclave
            $rfc = strtoupper(substr($user->curp, 0, 10) . self::homoclave());

            // Guardar el RFC generado en la base de datos
            $user->rfc = $rfc;
            $user->status = 1; // Activar el usuario

            // Asignar un rol al usuario
            // Aquí se asigna el rol "Contribuyente", puedes cambiarlo por cualquier rol deseado
            $role = 'Contribuyente';
            $user->assignRole($role);

            // Guardar los cambios en la base de datos
            $user->save();

            return redirect()->route('usuarios.index')->with('success', 'Usuario activado, RFC generado y rol asignado exitosamente.');
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
    $this->validate($request, [
        'name' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/'],
        'apellido_p' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]+$/'],
        'apellido_m' => ['nullable', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s]*$/'],
        'sexo' => 'required',
        'fecha_nacimiento' => 'nullable|date',
        'NombreComercial' => ['nullable', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s\'".]+$/'],
        'curp' => ['required', 'string', 'size:18', 'regex:/^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/'],
        'email' => 'required|email|unique:users,email',
        'password' => 'required|same:confirm-password',
        'roles' => 'required',
        'cp' => 'required',
        'nombre_vialidad'=>['nullable', 'string', 'max:255'],
        'tipo_vialidad' => ['nullable', 'string', 'max:255'],
        'num_interior' => ['nullable', 'string', 'max:255'],
        'num_exterior' => ['nullable', 'string', 'max:255'],
        'colonia' => ['nullable', 'string', 'max:255'],
        'localidad' => ['nullable', 'string', 'max:255'],
        'municipio' => ['nullable', 'string', 'max:255'],
        'entidad' => ['nullable', 'string', 'max:255'],
        'entre_calle1' => ['nullable', 'string', 'max:255'],
        'entre_calle2' => ['nullable', 'string', 'max:255']

    ]);

    $data = $request->all();
    $data['password'] = Hash::make($data['password']);
    $data['status'] = 0;
    $data['status_padron'] = 0;
    $data['fechaUltiCamEst'] = (new \DateTime())->format('Y-m-d');

    $domicilio = Domicilio::create([
        'cp' => $data['cp'],
        'nombre_vialidad'=>$data['nombre_vialidad'],
        'tipo_vialidad' => $data['tipo_vialidad'],
        'num_interior' => $data['num_interior'],
        'num_exterior' => $data['num_exterior'],
        'colonia' => $data['colonia'],
        'localidad' => $data['localidad'],
        'municipio' => $data['municipio'],
        'entidad' => $data['entidad'],
        'entre_calle1' => $data['entre_calle1'],
        'entre_calle2' => $data['entre_calle2'],
    ]);

    $user = User::create([
        'name' => $data['name'],
        'apellido_p' => $data['apellido_p'],
        'apellido_m' => $data['apellido_m'],
        'curp' => $data['curp'],
        'fecha_nacimiento' => $data['fecha_nacimiento'],
        'NombreComercial' => $data['NombreComercial'],
        'sexo' => $data['sexo'],
        'status' => $data['status'],
        'status_padron' => $data['status_padron'],
        'fechaUltiCamEst' => $data['fechaUltiCamEst'],
        'email' => $data['email'],
        'password' => $data['password'],
        'domicilio_id' => $domicilio->id,
    ]);

    $user->assignRole($request->input('roles'));

    // Redirigir a la lista de usuarios con un mensaje de éxito
    return redirect()->route('usuarios.index')
        ->with('success', 'Contribuyente '.$request->name. ' registrado exitosamente.');
}




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Busca al usuario con su domicilio y roles relacionados
        $user = User::with('domicilio', 'roles')->find($id);

        // Obtiene todos los roles disponibles
        $roles = Role::pluck('name', 'name')->all();

        // Obtiene los roles del usuario
        $userRole = $user->roles->pluck('name', 'name')->all();

        // Retorna la vista con los datos compactados
        return view('usuarios.show', compact('user', 'roles', 'userRole'));
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
        // Validaciones de usuario
        'name' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'apellido_p' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'apellido_m' => ['required', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'curp' => ['required', 'string', 'size:18', 'regex:/^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/'],
        'rfc' => ['required', 'string', 'size:13', 'regex:/^[A-Z]{3,4}\d{6}[A-Z0-9]{3}$/'],
        'FechaNac' => 'nullable|date',
        'Sexo' => ['nullable', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'Nacionalidad' => ['nullable', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'FechaIniOP' => 'nullable|date',
        'fechaUltiCamEst' => 'nullable|date',
        'NombreComercial' => ['nullable', 'regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ\s.,]+$/'],
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|same:confirm-password',
        'roles' => 'required|array',

        // Validaciones de domicilio
        'cp' => 'required|string|max:255',
        'nombre_vialidad'=>['nullable', 'string', 'max:255'],
        'tipo_vialidad' => ['nullable', 'string', 'max:255'],
        'num_interior' => ['nullable', 'string', 'max:255'],
        'num_exterior' => ['nullable', 'string', 'max:255'],
        'colonia' => ['nullable', 'string', 'max:255'],
        'localidad' => ['nullable', 'string', 'max:255'],
        'municipio' => ['nullable', 'string', 'max:255'],
        'entidad' => ['nullable', 'string', 'max:255'],
        'entre_calle1' => ['nullable', 'string', 'max:255'],
        'entre_calle2' => ['nullable', 'string', 'max:255']
    ]);

    $input = $request->all();

    $input['status'] = 1;


    // Encriptar la contraseña si se ha proporcionado
    if (!empty($input['password'])) {
        $input['password'] = Hash::make($input['password']);
    } else {
        $input = Arr::except($input, ['password']);
    }

    // Encontrar el usuario
    $user = User::findOrFail($id);

    // Asegurar que el RFC no cambie a menos que se proporcione uno nuevo
    if ($input['rfc'] !== $user->rfc) {
        $input['rfc'] = strtoupper(substr($input['curp'], 0, 10) . self::homoclave());
    } else {
        $input['rfc'] = $user->rfc;
    }

    // Actualizar el usuario
    $user->update($input);

    // Actualizar los datos de domicilio
    $domicilio = $user->domicilio;
    if ($domicilio) {
        $domicilio->update([
            'cp' => $request->input('cp'),
            'tipo_vialidad' => $request->input('tipo_vialidad'),
            'nombre_vialidad' => $request->input('nombre_vialidad'),
            'num_interior' => $request->input('num_interior'),
            'num_exterior' => $request->input('num_exterior'),
            'colonia' => $request->input('colonia'),
            'localidad' => $request->input('localidad'),
            'municipio' => $request->input('municipio'),
            'entidad' => $request->input('entidad'),
            'entre_calle1' => $request->input('entre_calle1'),
            'entre_calle2' => $request->input('entre_calle2')
        ]);
    }

    // Eliminar los roles actuales y asignar los nuevos roles
    DB::table('model_has_roles')->where('model_id', $id)->delete();
    $user->assignRole($request->input('roles'));

    return redirect()->route('usuarios.activos')->with('success', 'Contribuyente ' . $request->name . ' actualizado exitosamente.');
}


    public function fechas($date){
        $dateObj = new DateTime($date);

        $day = $dateObj->format('d');
        $month = $dateObj->format('n');
        $year = $dateObj->format('Y');
        $monthNames = [
            1 => 'enero',
            2 => 'febrero',
            3 => 'marzo',
            4 => 'abril',
            5 => 'mayo',
            6 => 'junio',
            7 => 'julio',
            8 => 'agosto',
            9 => 'septiembre',
            10 => 'octubre',
            11 => 'noviembre',
            12 => 'diciembre',
        ];

        // Format the date using the array
        return $day.' de '.$monthNames[$month].' del '.$year;
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
        return redirect()->route('usuarios.activos');
    }
}
