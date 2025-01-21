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

         // Prestas servicios profesionales de manera independiente-> OTROS SERVICIOS DE APOYO ->Servicios de traducción e interpretación
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>24,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 9,
            'actividade_id'=>24,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 1,
            'actividade_id'=>24,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 8,
            'actividade_id'=>24,
        ]);

        // Prestas servicios profesionales de manera independiente-> OTROS SERVICIOS DE APOYO ->Dirección de corporativos y empresas financieras
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>25,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>25,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>25,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>25,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>25,
        ]);

        // Prestas servicios profesionales de manera independiente-> OTROS SERVICIOS DE APOYO ->Dirección de corporativos y empresas no financieras
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>26,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>26,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>26,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>26,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>26,
        ]);

         // Prestas servicios profesionales de manera independiente-> OTROS SERVICIOS DE APOYO ->Servicios de administración de negocios
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>27,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>27,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>27,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>27,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>27,
        ]);

         // Prestas servicios profesionales de manera independiente-> OTROS SERVICIOS DE APOYO ->Servicios de preparación de documentos
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>28,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>28,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>28,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>28,
        ]);

          // Prestas servicios profesionales de manera independiente->Apoyo a actividades agropecuarias y forestales->Administración de empresas o negocios agrícolas
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>29,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 9,
            'actividade_id'=>29,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 1,
            'actividade_id'=>29,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 8,
            'actividade_id'=>29,
        ]);


          // Prestas servicios profesionales de manera independiente->Apoyo a actividades agropecuarias y forestales-> Administración de empresas o negocios ganaderos
          DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>30,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>30,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>30,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>30,
        ]);

        // Prestas servicios profesionales de manera independiente->Apoyo a actividades agropecuarias y forestales-> Administración de empresas o negocios ganaderos
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>31,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>31,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>31,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>31,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>31,
        ]);

         // Prestas servicios profesionales de manera independiente->Recreativos-> Cantantes y grupos musicales
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>37,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>37,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>37,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>37,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>37,
        ]);

        // Prestas servicios profesionales de manera independiente->Recreativos-> Agentes y representantes de artistas, deportistas y similares  3,31,579,27
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>38,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>38,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 8,
            'actividade_id'=>38,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>38,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>38,
        ]);

        // Prestas servicios profesionales de manera independiente->Recreativos-> Agentes y representantes de artistas, deportistas y similares  3,20,78,32
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>39,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>39,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 9,
            'actividade_id'=>39,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 1,
            'actividade_id'=>39,
        ]);

        // Prestas servicios profesionales de manera independiente->Inmuebles->servicios de administracion  3,20,31,9,579
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>40,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>40,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>40,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>40,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>40,
        ]);

        // Prestas servicios profesionales de manera independiente->Inmuebles->Otros servicios relacionados con los servicios inmobiliarios   3,31,9,579
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>41,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>41,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>41,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>41,
        ]);

        // Prestas servicios profesionales de manera independiente->Inversiones->servicios de administracion  3,20,31,9,579
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>42,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>42,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>42,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>42,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>42,
        ]);


         // Prestas servicios profesionales de manera independiente->Inversiones->Agentes, ajustadores y gestores de seguros de vida  3,20,31
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>43,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>43,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>43,
        ]);

         // Prestas servicios profesionales de manera independiente->Inversiones-Agentes, ajustadores y gestores de seguros contra riesgos agropecuarios  3,20,31
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>44,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>44,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 6,
            'actividade_id'=>44,
        ]);

        // Prestas servicios profesionales de manera independiente->Inversiones->Agentes, ajustadores y gestores de otros seguros  3,20,78,32
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>45,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>45,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 9,
            'actividade_id'=>45,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 1,
            'actividade_id'=>45,
        ]);


        // Cobras rentas por el alquiler de casa habitación, oficinas, locales->Apoyo a actividades agropecuarias y forestales-> Alquiler de Viviendas amuebladas
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>32,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 10,
            'actividade_id'=>32,
        ]);

        // Cobras rentas por el alquiler de casa habitación, oficinas, locales->Apoyo a actividades agropecuarias y forestales-> Alquiler de Viviendas no amuebladas
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>33,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>33,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 10,
            'actividade_id'=>33,
        ]);

         // Cobras rentas por el alquiler de casa habitación, oficinas, locales->Apoyo a actividades agropecuarias y forestales-> Alquiler de Salones para fiestas y convenciones
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>34,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>34,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>34,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>34,
        ]);

         // Cobras rentas por el alquiler de casa habitación, oficinas, locales->Apoyo a actividades agropecuarias y forestales-> Alquiler de Oficinas y locales comerciales
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>35,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 5,
            'actividade_id'=>35,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>35,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>35,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 10,
            'actividade_id'=>35,
        ]);

        // Realizas actividades empresariales (comerciales, industriales, agrícolas, ganaderas, silvícolas o pesqueras)->RecursosNaturales->AGRICULTURA-> Siembra, cultivo y cosecha de soya
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>36,
        ]);

         // Realizas actividades empresariales (comerciales, industriales, agrícolas, ganaderas, silvícolas o pesqueras)->RecursosNaturales->AGRICULTURA-> Siembra, cultivo y cosecha de cártamo
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 2,
            'actividade_id'=>37,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 11,
            'actividade_id'=>37,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>37,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>37,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Teatros, estadios, auditorios y similares 3,2,9,579,27
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>46,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>10,
            'actividade_id'=>46,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>46,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>46,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>8,
            'actividade_id'=>46,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Teatros, estadios, auditorios y similares 3,2,9,579,27
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>46,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>10,
            'actividade_id'=>46,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 3,
            'actividade_id'=>46,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' => 7,
            'actividade_id'=>46,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>8,
            'actividade_id'=>46,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Fincas destinadas a fines agrícolas o ganaderos 3,2
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>47,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>10,
            'actividade_id'=>47,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Otros inmuebles 3,734,740,579
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>48,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>12,
            'actividade_id'=>48,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>13,
            'actividade_id'=>48,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>7,
            'actividade_id'=>48,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de inmuebles para escuelas, colegios de profesionales e instituciones de asistencia y beneficencia o empresas asociaciones u organismos no comercia 3
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>49,
        ]);

        //Otros Ingresos->Explotación de concesiones, permisos, autorizaciones o contrat-> 3, 78, 59
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>52,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>14,
            'actividade_id'=>52,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>15,
            'actividade_id'=>52,
        ]);

        //Otros Ingresos->Explotación del subsuelo sujetos a regímenes fiscales preferentes-> 3, 204, 73
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>53,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>16,
            'actividade_id'=>53,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>17,
            'actividade_id'=>53,
        ]);

        //Otros Ingresos->Explotación del subsuelo-> 3, 58, 9, 579
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>54,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>18,
            'actividade_id'=>54,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>3,
            'actividade_id'=>54,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>7,
            'actividade_id'=>54,
        ]);

        //Otros Ingresos->Participación en productos del subsuelo sujetos a regímenes fiscales preferentes-> 3, 204, 73
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>55,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>16,
            'actividade_id'=>55,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>17,
            'actividade_id'=>55,
        ]);

         //Otros Ingresos->Participación en productos del subsuelo-> 3, 58, 9, 579
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>56,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>18,
            'actividade_id'=>56,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>3,
            'actividade_id'=>56,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>7,
            'actividade_id'=>56,
        ]);

         //Otros Ingresos->Ingresos derivados del otorgamiento de fianzas o avales-> 3, 58, 9, 579
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>57,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>18,
            'actividade_id'=>57,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>3,
            'actividade_id'=>57,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>7,
            'actividade_id'=>57,
        ]);

        //Otros Ingresos->Regalías por uso o goce temporal de patentes y franquicias-> 3, 58
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>58,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>18,
            'actividade_id'=>58,
        ]);

        //Otros Ingresos->Operaciones financieras derivadas en el Mercado Mexicano de Derivados -> 3, 58
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>59,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>18,
            'actividade_id'=>59,
        ]);

        //Otros Ingresos->Operaciones financieras derivadas en el Mercado Mexicano de Derivados -> 3, 58
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>59,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>18,
            'actividade_id'=>59,
        ]);

        //Otros Ingresos->Inversiones realizadas en sociedades residentes en el extranjero sin establecimiento en el país  -> 3
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>60,
        ]);

        //Otros Ingresos->Ganancia cambiaria y los intereses obtenidos por otros créditos, operaciones o préstamos otorgados a residentes en el extranjero -> 3, 9,579
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>62,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>3,
            'actividade_id'=>62,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>7,
            'actividade_id'=>62,
        ]);

        //Otros Ingresos->Dividendos o utilidades distribuidos por sociedades residentes en el extranjero-> 3
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>63,
        ]);

        //Otros Ingresos->Remanente distribuible proveniente de personas morales con fines no lucrativos del Impuesto Sobre la Renta-> 3
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>64,
        ]);

        //Otros Ingresos->Intereses del extranjero -> 3
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>65,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Viviendas amuebladas -> 842, 841, 849
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>20,
            'actividade_id'=>66,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>21,
            'actividade_id'=>66,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>22,
            'actividade_id'=>66,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Viviendas no amuebladas -> 842, 841,27
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>20,
            'actividade_id'=>67,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>21,
            'actividade_id'=>67,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>8,
            'actividade_id'=>67,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Salones para fiestas y convenciones-> 842, 20,841, 849
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>20,
            'actividade_id'=>68,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>5,
            'actividade_id'=>68,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>21,
            'actividade_id'=>68,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>22,
            'actividade_id'=>68,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Oficinas y locales comerciales-> 842, 20,841, 849
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>20,
            'actividade_id'=>69,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>5,
            'actividade_id'=>69,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>21,
            'actividade_id'=>69,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>22,
            'actividade_id'=>69,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Teatros, estadios, auditorios y similares-> 842, 841, 849, 27
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>20,
            'actividade_id'=>70,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>21,
            'actividade_id'=>70,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>22,
            'actividade_id'=>70,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>8,
            'actividade_id'=>70,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Fincas destinadas a fines agrícolas o ganaderos-> 842, 841
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>20,
            'actividade_id'=>71,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>21,
            'actividade_id'=>71,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de Otros inmuebles-> 842, 841, 849
        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>20,
            'actividade_id'=>72,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>21,
            'actividade_id'=>72,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>22,
            'actividade_id'=>72,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>8,
            'actividade_id'=>72,
        ]);


         //Cobras rentas por el alquiler de casa habitación, oficinas, locales->Alquiler de inmuebles para escuelas, colegios de profesionales e instituciones de asistencia y beneficencia o empresas asociaciones u organismos no comerciales-> 842, 20,841, 849
         DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>20,
            'actividade_id'=>73,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>5,
            'actividade_id'=>73,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>21,
            'actividade_id'=>73,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>22,
            'actividade_id'=>73,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>76,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>3,
            'actividade_id'=>76,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>6,
            'actividade_id'=>76,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>7,
            'actividade_id'=>76,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>3,
            'actividade_id'=>78,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>7,
            'actividade_id'=>78,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>79,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>6,
            'actividade_id'=>79,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>2,
            'actividade_id'=>80,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>3,
            'actividade_id'=>80,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>6,
            'actividade_id'=>80,
        ]);

        DB::table('obligacione_actividades')->insert([
            'obligacione_id' =>7,
            'actividade_id'=>80
        ]);
    }
}

