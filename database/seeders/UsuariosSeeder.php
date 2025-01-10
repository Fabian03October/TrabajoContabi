<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Domicilio;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        // Arreglo con nombres de ejemplo
        $personas = [
            ['nombre' => 'Juan', 'apellido_p' => 'Perez', 'apellido_m' => 'Lopez', 'curp' => 'PELP891020HDFRLS02'],
            ['nombre' => 'Maria', 'apellido_p' => 'Gomez', 'apellido_m' => 'Sanchez', 'curp' => 'GOSA921105MDFRLN02'],
            ['nombre' => 'Luis', 'apellido_p' => 'Ramirez', 'apellido_m' => 'Cruz', 'curp' => 'RACL850720HDFLMS02'],
            ['nombre' => 'Ana', 'apellido_p' => 'Martinez', 'apellido_m' => 'Lopez', 'curp' => 'MALO920530MDFRPN02'],
            ['nombre' => 'Carlos', 'apellido_p' => 'Dominguez', 'apellido_m' => 'Garcia', 'curp' => 'DOGC881110HDFRCL02'],
            ['nombre' => 'Laura', 'apellido_p' => 'Vazquez', 'apellido_m' => 'Jimenez', 'curp' => 'VAJI940420MDFRPL02'],
            ['nombre' => 'Pedro', 'apellido_p' => 'Fernandez', 'apellido_m' => 'Torres', 'curp' => 'FETO850620HDFRTS02'],
            ['nombre' => 'Claudia', 'apellido_p' => 'Hernandez', 'apellido_m' => 'Ortiz', 'curp' => 'HEOR970105MDFRCN02'],
            ['nombre' => 'Jorge', 'apellido_p' => 'Mendez', 'apellido_m' => 'Cortes', 'curp' => 'MECO880315HDFRTN02'],
            ['nombre' => 'Isabel', 'apellido_p' => 'Reyes', 'apellido_m' => 'Flores', 'curp' => 'REFO911210MDFRLN02'],
        ];

        foreach ($personas as $persona) {
            // Crear un domicilio de ejemplo para cada usuario
            $domicilio = Domicilio::create([
                'cp' => rand(10000, 99999),
                'nombre_vialidad' => 'Calle Ejemplo ' . rand(1, 100),
                'tipo_vialidad' => 'Avenida',
                'num_interior' => rand(1, 50) . chr(rand(65, 90)), // Letras aleatorias para el interior
                'num_exterior' => rand(1, 500),
                'colonia' => 'Colonia Ejemplo',
                'localidad' => 'Localidad Ejemplo',
                'municipio' => 'Municipio Ejemplo',
                'entidad' => 'Entidad Ejemplo',
                'entre_calle1' => 'Calle ' . rand(1, 50),
                'entre_calle2' => 'Calle ' . rand(51, 100),
            ]);

            // Crear un usuario de ejemplo para cada entrada
            $user = User::create([
                'name' => $persona['nombre'],
                'apellido_p' => $persona['apellido_p'],
                'apellido_m' => $persona['apellido_m'],
                'curp' => $persona['curp'],
                'fecha_nacimiento' => '1980-01-01',
                'NombreComercial' => 'Negocio ' . $persona['nombre'],
                'sexo' => 'H',
                'status' => 1,
                'status_padron' => 0,
                'fechaUltiCamEst' => now(),
                'email' => strtolower($persona['nombre'] . $persona['apellido_p'] . '@example.com'),
                'password' => Hash::make('password'),
                'rfc' => strtoupper(substr($persona['curp'], 0, 10) . Str::random(3)), // RFC generado
                'domicilio_id' => $domicilio->id, // Relación con el domicilio
            ]);

            // Asignar rol al usuario
            $user->assignRole('Contribuyente');
        }
    }
}