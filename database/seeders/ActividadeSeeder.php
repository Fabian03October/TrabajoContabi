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
            'nombre' => 'Provienen de un patrón en México',
            'clave'=>'2319',
            'descripcion'=>'',
            'categoria'=>'Asalariado',
            'obligacion'=>'',
            'tasa_impositiva'=>1.92,
            'periocidad_pago'=>'',
            'regimene_id'=>5,
            'tipopersona_id'=>1,
        ]);
        //2
        DB::table('actividades')->insert([
            'nombre' => 'Provienen de embajadas, organismos internacionales o extranjeros',
            'clave'=>'2319',
            'descripcion'=>'',
            'categoria'=>'Asalariado',
            'obligacion'=>'',
            'tasa_impositiva'=>1.92,
            'periocidad_pago'=>'',
            'regimene_id'=>5,
            'tipopersona_id'=>1,
        ]);
        //3
        DB::table('actividades')->insert([
            'nombre' => 'Eres jubilado o pensionado',
            'clave'=>'2320',
            'descripcion'=>'',
            'categoria'=>'Pensionado',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>5,
            'tipopersona_id'=>1,
        ]);

        //4
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de agencias aduanales',
            'clave'=>'720',
            'descripcion'=>'',
            'categoria'=>'Profesionales',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //5
        DB::table('actividades')->insert([
            'nombre' => 'Bufetes Juridicos',
            'clave'=>'720',
            'descripcion'=>'',
            'categoria'=>'Profesionales',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //6
        DB::table('actividades')->insert([
            'nombre' => 'Notarias Publicas',
            'clave'=>'720',
            'descripcion'=>'',
            'categoria'=>'Profesionales',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

          //7
          DB::table('actividades')->insert([
            'nombre' => 'Servicios de apoyo para efectuar trámites legales',
            'clave'=>'833',
            'descripcion'=>'',
            'categoria'=>'Profesionales',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //8
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de contabilidad y auditoría',
            'clave'=>'834',
            'descripcion'=>'',
            'categoria'=>'Profesionales',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //9
        DB::table('actividades')->insert([
            'nombre' => 'Otros servicios de contabilidad',
            'clave'=>'836',
            'descripcion'=>'',
            'categoria'=>'Profesionales',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

           //10
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de arquitectura',
            'clave'=>'835',
            'descripcion'=>'',
            'categoria'=>'Profesionales',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
         //11
         DB::table('actividades')->insert([
            'nombre' => 'Servicios de arquitectura de paisaje y urbanismo',
            'clave'=>'837',
            'descripcion'=>'',
            'categoria'=>'Profesionales',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
        //EDUCATIVOS -> 12
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de profesores particulares',
            'clave'=>'945',
            'descripcion'=>'',
            'categoria'=>'Educativos',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
        //13
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de apoyo a la educación',
            'clave'=>'948',
            'descripcion'=>'',
            'categoria'=>'Educativos',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
        //SALUD -> 14
        DB::table('actividades')->insert([
            'nombre' => 'Servicios veterinarios para mascotas prestados por el sector privado que requieran de título de médico conforme a las leyes',
            'clave'=>'867',
            'descripcion'=>'',
            'categoria'=>'Salud',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //SALUD -> 15
         DB::table('actividades')->insert([
            'nombre' => 'Servicios veterinarios para la ganadería prestados por el sector privado que requieran de título de médico conforme a las leyes ',
            'clave'=>'869',
            'descripcion'=>'',
            'categoria'=>'Salud',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //SALUD -> 16
        DB::table('actividades')->insert([
            'nombre' => 'Consultorios de medicina general pertenecientes al sector privado que cuenten con título de médico conforme a las leyes',
            'clave'=>'949',
            'descripcion'=>'',
            'categoria'=>'Salud',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //SALUD -> 17
        DB::table('actividades')->insert([
            'nombre' => 'Consultorios de medicina especializada pertenecientes al sector privado que cuenten con título de médico conforme a las leyes ',
            'clave'=>'951',
            'descripcion'=>'',
            'categoria'=>'Salud',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

           //SALUD -> 18
           DB::table('actividades')->insert([
            'nombre' => 'Consultorios dentales del sector privado que cuenten con título de médico conforme a las leyes',
            'clave'=>'953',
            'descripcion'=>'',
            'categoria'=>'Salud',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //APOYO CONTRUSCCION -> 19
         DB::table('actividades')->insert([
            'nombre' => 'Administración y supervisión de construcción de vivienda',
            'clave'=>'126',
            'descripcion'=>'',
            'categoria'=>'Construccion',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //APOYO CONTRUSCCION -> 20
        DB::table('actividades')->insert([
            'nombre' => 'Administración y supervisión de Construcción de naves y plantas industriales',
            'clave'=>'130',
            'descripcion'=>'',
            'categoria'=>'Construccion',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //APOYO CONTRUSCCION -> 21
        DB::table('actividades')->insert([
            'nombre' => 'Administración y supervisión de Construcción de inmuebles comerciales, institucionales y de servicios ',
            'clave'=>'133',
            'descripcion'=>'',
            'categoria'=>'Construccion',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //APOYO CONTRUSCCION -> 22
         DB::table('actividades')->insert([
            'nombre' => 'Administración y supervisión de construcción de obras para el tratamiento, distribución y suministro de agua, drenaje y riego',
            'clave'=>'137',
            'descripcion'=>'',
            'categoria'=>'Construccion',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //APOYO CONTRUSCCION -> 23
         DB::table('actividades')->insert([
            'nombre' => 'Guías de turismo que trabajan por cuenta propia',
            'clave'=>'2296',
            'descripcion'=>'',
            'categoria'=>'Turismo',
            'obligacion'=>'',
            'tasa_impositiva'=>1.0,
            'periocidad_pago'=>'',
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
    }
}
