<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ActividadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('actividades')->insert([
            'nombre' => 'Sueldos y salarios',
            'descripcion'=>'',
            'obligacion'=>'',
            'tasa_impositiva'=>20.0,
            'periocidad_pago'=>'',
            'regimene_id'=>1,
        ]);

        DB::table('actividades')->insert([
            'nombre' => 'Jubilados',
            'descripcion'=>'',
            'obligacion'=>'',
            'tasa_impositiva'=>20.0,
            'periocidad_pago'=>'',
            'regimene_id'=>1,
        ]);

        DB::table('actividades')->insert([
            'nombre' => 'Actividad empresarial (Honorarios)',
            'descripcion'=>'',
            'obligacion'=>'',
            'tasa_impositiva'=>20.0,
            'periocidad_pago'=>'',
            'regimene_id'=>1,
        ]);

        DB::table('actividades')->insert([
            'nombre' => 'Arrendamiento',
            'descripcion'=>'',
            'obligacion'=>'',
            'tasa_impositiva'=>20.0,
            'periocidad_pago'=>'',
            'regimene_id'=>1,
        ]);

        DB::table('actividades')->insert([
            'nombre' => 'Actividad empresarial',
            'descripcion'=>'',
            'obligacion'=>'',
            'tasa_impositiva'=>20.0,
            'periocidad_pago'=>'',
            'regimene_id'=>1,
        ]);

        DB::table('actividades')->insert([
            'nombre' => 'Agapes',
            'descripcion'=>'',
            'obligacion'=>'',
            'tasa_impositiva'=>20.0,
            'periocidad_pago'=>'',
            'regimene_id'=>1,
        ]);

        DB::table('actividades')->insert([
            'nombre' => 'Comisionistas',
            'descripcion'=>'',
            'obligacion'=>'',
            'tasa_impositiva'=>20.0,
            'periocidad_pago'=>'',
            'regimene_id'=>1,
        ]);
    }
}
