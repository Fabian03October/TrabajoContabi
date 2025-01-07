<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObligacioneActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Asalariados - Provienen de embajadas, organismos internacionales o extranjeros
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>2,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>2,
        ]);

        // Prestas servicios profesionales de manera independiente-> PROFESIONALES -> Prestas servicios profesionales de manera independiente
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>4,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>4,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>4,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>4,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>4,
        ]);

        // Prestas servicios profesionales de manera independiente-> PROFESIONALES -> Bufetes Juridicos
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>5,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>5,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>5,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>5,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>5,
        ]);

         // Prestas servicios profesionales de manera independiente-> PROFESIONALES -> Notarias publicas
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>6,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>6,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>6,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>6,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>6,
        ]);

         // Prestas servicios profesionales de manera independiente-> PROFESIONALES -> Servicios de apoyo para efectuar trámites legales
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>7,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>7,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>7,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>7,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 8,
            'actividade_id'=>7,
        ]);

        // Prestas servicios profesionales de manera independiente-> PROFESIONALES -> Servicios de contabilidad y auditoría
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>8,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>8,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>8,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>8,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>8,
        ]);

         // Prestas servicios profesionales de manera independiente-> PROFESIONALES -> Servicios de arquitectura
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>10,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>10,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>10,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>10,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 8,
            'actividade_id'=>10,
        ]);

         // Prestas servicios profesionales de manera independiente-> PROFESIONALES -> Servicios de arquitectura de paisajes y urbanismo
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>11,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 9,
            'actividade_id'=>11,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 1,
            'actividade_id'=>11,
        ]);
         // Prestas servicios profesionales de manera independiente-> EDUCACION -> Servicios de profesores particulares
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>12,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>12,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>12,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>12,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 8,
            'actividade_id'=>12,
        ]);

         // Prestas servicios profesionales de manera independiente-> EDUCACION -> Servicios de apoyo a la educación
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>13,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>13,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>13,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>13,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>13,
        ]);

         // Prestas servicios profesionales de manera independiente-> SALUD -> Servicios veterinarios para mascotas prestados por el sector privado que requieran de título de médico conforme a las leyes
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>14,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>14,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>14,
        ]);

        // Prestas servicios profesionales de manera independiente-> SALUD -> Servicios veterinarios para la ganadería prestados por el sector privado que requieran de título de médico conforme a las leyes
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>15,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>15,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>15,
        ]);

        // Prestas servicios profesionales de manera independiente-> SALUD -> Consultorios de medicina general pertenecientes al sector privado que cuenten con título de médico conforme a las leyes
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>16,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>16,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>16,
        ]);

         // Prestas servicios profesionales de manera independiente-> SALUD -> Consultorios de medicina especializada pertenecientes al sector privado que cuenten con título de médico conforme a las leyes
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>17,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>17,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>17,
        ]);

        // Prestas servicios profesionales de manera independiente-> SALUD -> Consultorios dentales del sector privado que cuenten con título de médico conforme a las leyes
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>18,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>18,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>18,
        ]);

         // Prestas servicios profesionales de manera independiente-> APOYO A LA CONTRUCCION -> Administración y supervisión de construcción de vivienda
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>19,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>19,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>19,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>19,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>19,
        ]);

         // Prestas servicios profesionales de manera independiente-> APOYO A LA CONTRUCCION -> Administración y supervisión de Construcción de naves y plantas industriales
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>20,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>20,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>20,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>20,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 8,
            'actividade_id'=>20,
        ]);

         // Prestas servicios profesionales de manera independiente-> APOYO A LA CONTRUCCION -> Administración y supervisión de Construcción de inmuebles comerciales, institucionales y de servicios
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>21,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 9,
            'actividade_id'=>21,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 1,
            'actividade_id'=>21,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 8,
            'actividade_id'=>21,
        ]);

         // Prestas servicios profesionales de manera independiente-> APOYO A LA CONSTRUCCION -> Administración y supervisión de construcción de obras para el tratamiento, distribución y suministro de agua, drenaje y riego
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>22,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>22,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>22,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>22,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>22,
        ]);

         // Prestas servicios profesionales de manera independiente-> GUIA DE TURISMO -> Guías de turismo que trabajan por cuenta propia
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>23,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>23,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>23,
        ]);
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>23,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>23,
        ]);

    }
}
