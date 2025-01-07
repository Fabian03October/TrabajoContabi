<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegimeneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('regimenes')->insert([
            'nombre' => 'Régimen general de ley',
            'descripcion'=>'',
            'tasa_impositiva'=>1.2
        ]);
        //2
        DB::table('regimenes')->insert([
            'nombre' => 'Regimen simplificado de confianza (RESICO)',
            'descripcion'=>'',
            'tasa_impositiva'=>1.2
        ]);
        //3
        DB::table('regimenes')->insert([
            'nombre' => 'Régimen de Actividades Empresariales y Profesionales.',
            'descripcion'=>'',
            'tasa_impositiva'=>1.2
        ]);
        //4
        DB::table('regimenes')->insert([
            'nombre' => 'Régimen de Arrendamiento.',
            'descripcion'=>'',
            'tasa_impositiva'=>1.2
        ]);

        DB::table('regimenes')->insert([
            'nombre' => 'Régimen de Sueldos y Salarios e Ingresos Asimilados a Salarios.',
            'descripcion'=>'',
            'tasa_impositiva'=>1.2
        ]);

        // DB::table('regimenes')->insert([
        //     'nombre' => 'Régimen general de ley',
        //     'descripcion'=>'',
        //     'tipopersona_id'=>
        // ]);
    }
}
