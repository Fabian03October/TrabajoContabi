<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_ingresos')->insert([
            'nombre' => 'Eres asalariado',
            'descipcion'=>'Selecciona esta opción si ......',
            'actividade_id'=>1,
        ]);
        DB::table('tipo_ingresos')->insert([
            'nombre' => 'Eres jubilado o pensionado',
           'descipcion'=>'Selecciona esta opción si ......',
            'actividade_id'=>2,
        ]);
        DB::table('tipo_ingresos')->insert([
            'nombre' => 'Cobras rentas por el alquiler de casa habitación, oficinas, locales',
            'descipcion'=>'Selecciona esta opción si ......',
            'actividade_id'=>4,
        ]);
        DB::table('tipo_ingresos')->insert([
            'nombre' => 'Prestas servicios profesionales de manera independiente',
            'descipcion'=>'Selecciona esta opción si ......',
            'actividade_id'=>3,
        ]);
        DB::table('tipo_ingresos')->insert([
            'nombre' => 'Realizas actividades empresariales (comerciales, industriales)',
            'descipcion'=>'Selecciona esta opción si ......',
            'actividade_id'=>5,
        ]);
        DB::table('tipo_ingresos')->insert([
            'nombre' => 'Realizas actividades empresariales (agrícolas, ganaderas, silvícolas o pesqueras)',
            'descipcion'=>'Selecciona esta opción si ......',
            'actividade_id'=>6,
        ]);
        DB::table('tipo_ingresos')->insert([
            'nombre' => 'Actividades empresariales con ingresos por la enajenación de bienes o la prestación de servicios a través de Internet, plataformas, aplicaciones informáticas y similares',
            'descipcion'=>'Selecciona esta opción si ......',
            'actividade_id'=>5,
        ]);
        DB::table('tipo_ingresos')->insert([
            'nombre' => '',
            'descipcion'=>'',
            'descipcion'=>'Selecciona esta opción si ......',
        ]);
        // DB::table('tipo_ingresos')->insert([
        //     'nombre' => '',
        //     'descipcion'=>'',
        //     'descipcion'=>'Selecciona esta opción si ......',
        // ]);

    }
}
