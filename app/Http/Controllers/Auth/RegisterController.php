<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Domicilio;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'apellido_p' => ['required', 'string', 'max:255'],  // Validación para apellido paterno
            'apellido_m' => ['nullable', 'string', 'max:255'],
            'curp' => ['nullable', 'string', 'size:18', 'regex:/^[A-Z]{4}\d{6}[HM][A-Z]{5}[A-Z0-9]{2}$/'], 
            'fecha_nacimiento'=>'required',
            'NombreComercial' => ['nullable', 'string', 'max:255'],
            'sexo' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // Crear el domicilio y obtener el ID
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

        // Usar el ID del domicilio para crear el usuario
        return User::create([
            'name' => $data['name'],
            'apellido_p' => $data['apellido_p'],
            'apellido_m' => $data['apellido_m'],
            'curp' => $data['curp'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'NombreComercial' => $data['NombreComercial'],
            'sexo' => $data['sexo'],
            'status' => false,
            'status_padron' => false,
            'fechaUltiCamEst' => (new \DateTime())->format('Y-m-d'),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'domicilio_id' => $domicilio->id, // Usar el ID del domicilio creado
        ]);
    }

}
