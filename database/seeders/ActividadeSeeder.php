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
            'categoria'=>'Asalariado',
            'tasa_impositiva'=>1.92,
            'regimene_id'=>5,
            'tipopersona_id'=>1,
        ]);
        //2
        DB::table('actividades')->insert([
            'nombre' => 'Provienen de embajadas, organismos internacionales o extranjeros',
            'clave'=>'2319',
            'categoria'=>'Asalariado',
            'tasa_impositiva'=>1.92,
            'regimene_id'=>5,
            'tipopersona_id'=>1,
        ]);
        //3
        DB::table('actividades')->insert([
            'nombre' => 'Eres jubilado o pensionado',
            'clave'=>'2320',
            'categoria'=>'Pensionado',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>5,
            'tipopersona_id'=>1,
        ]);

        //4
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de agencias aduanales',
            'clave'=>'720',
            'categoria'=>'Profesionales',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //5
        DB::table('actividades')->insert([
            'nombre' => 'Bufetes Juridicos',
            'clave'=>'831',
            'categoria'=>'Profesionales',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //6
        DB::table('actividades')->insert([
            'nombre' => 'Notarias Publicas',
            'clave'=>'832',
            'categoria'=>'Profesionales',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

          //7
          DB::table('actividades')->insert([
            'nombre' => 'Servicios de apoyo para efectuar trámites legales',
            'clave'=>'833',
            'categoria'=>'Profesionales',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //8
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de contabilidad y auditoría',
            'clave'=>'834',
            'categoria'=>'Profesionales',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //9
        DB::table('actividades')->insert([
            'nombre' => 'Otros servicios de contabilidad',
            'clave'=>'836',
            'categoria'=>'Profesionales',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

           //10
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de arquitectura',
            'clave'=>'835',
            'categoria'=>'Profesionales',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
         //11
         DB::table('actividades')->insert([
            'nombre' => 'Servicios de arquitectura de paisaje y urbanismo',
            'clave'=>'837',
            'categoria'=>'Profesionales',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
        //EDUCATIVOS -> 12
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de profesores particulares',
            'clave'=>'945',
            'categoria'=>'Educativos',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
        //13
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de apoyo a la educación',
            'clave'=>'948',
            'categoria'=>'Educativos',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
        //SALUD -> 14
        DB::table('actividades')->insert([
            'nombre' => 'Servicios veterinarios para mascotas prestados por el sector privado que requieran de título de médico conforme a las leyes',
            'clave'=>'867',
            'categoria'=>'Salud',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //SALUD -> 15
         DB::table('actividades')->insert([
            'nombre' => 'Servicios veterinarios para la ganadería prestados por el sector privado que requieran de título de médico conforme a las leyes ',
            'clave'=>'869',
            'categoria'=>'Salud',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //SALUD -> 16
        DB::table('actividades')->insert([
            'nombre' => 'Consultorios de medicina general pertenecientes al sector privado que cuenten con título de médico conforme a las leyes',
            'clave'=>'949',
            'categoria'=>'Salud',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //SALUD -> 17
        DB::table('actividades')->insert([
            'nombre' => 'Consultorios de medicina especializada pertenecientes al sector privado que cuenten con título de médico conforme a las leyes ',
            'clave'=>'951',
            'categoria'=>'Salud',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

           //SALUD -> 18
           DB::table('actividades')->insert([
            'nombre' => 'Consultorios dentales del sector privado que cuenten con título de médico conforme a las leyes',
            'clave'=>'953',
            'categoria'=>'Salud',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //APOYO CONTRUSCCION -> 19
         DB::table('actividades')->insert([
            'nombre' => 'Administración y supervisión de construcción de vivienda',
            'clave'=>'126',
            'categoria'=>'Construccion',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //APOYO CONTRUSCCION -> 20
        DB::table('actividades')->insert([
            'nombre' => 'Administración y supervisión de Construcción de naves y plantas industriales',
            'clave'=>'130',
            'categoria'=>'Construccion',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //APOYO CONTRUSCCION -> 21
        DB::table('actividades')->insert([
            'nombre' => 'Administración y supervisión de Construcción de inmuebles comerciales, institucionales y de servicios ',
            'clave'=>'133',
            'categoria'=>'Construccion',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //APOYO CONTRUSCCION -> 22
         DB::table('actividades')->insert([
            'nombre' => 'Administración y supervisión de construcción de obras para el tratamiento, distribución y suministro de agua, drenaje y riego',
            'clave'=>'137',
            'categoria'=>'Construccion',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //APOYO CONTRUSCCION -> 23
         DB::table('actividades')->insert([
            'nombre' => 'Guías de turismo que trabajan por cuenta propia',
            'clave'=>'2296',
            'categoria'=>'Turismo',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //OTROS SERVICIOS DE APOYO ->24
        DB::table('actividades')->insert([
            'nombre' => 'Servicios de traducción e interpretación',
            'clave'=>'866',
            'categoria'=>'ServiciosdeApoyo',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //OTROS SERVICIOS DE APOYO ->25
        DB::table('actividades')->insert([
            'nombre' => 'Dirección de corporativos y empresas financieras',
            'clave'=>'872',
            'categoria'=>'ServiciosdeApoyo',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        //OTROS SERVICIOS DE APOYO ->26
        DB::table('actividades')->insert([
            'nombre' => 'Dirección de corporativos y empresas no financieras',
            'clave'=>'873',
            'categoria'=>'ServiciosdeApoyo',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //OTROS SERVICIOS DE APOYO ->27
         DB::table('actividades')->insert([
            'nombre' => 'Servicios de administración de negocios ',
            'clave'=>'874',
            'categoria'=>'ServiciosdeApoyo',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         //OTROS SERVICIOS DE APOYO ->28
         DB::table('actividades')->insert([
            'nombre' => 'Servicios de preparación de documentos',
            'clave'=>'888',
            'categoria'=>'ServiciosdeApoyo',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Apoyo a actividades agropecuarias y forestales->29
        DB::table('actividades')->insert([
            'nombre' => 'Administración de empresas o negocios agrícolas',
            'clave'=>'84',
            'categoria'=>'ActividadesAgropecuarias',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);
         // Apoyo a actividades agropecuarias y forestales->30
         DB::table('actividades')->insert([
            'nombre' => 'Administración de empresas o negocios ganaderos ',
            'clave'=>'86',
            'categoria'=>'ActividadesAgropecuarias',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

         // Apoyo a actividades agropecuarias y forestales->31
         DB::table('actividades')->insert([
            'nombre' => 'Administración de empresas o negocios forestales',
            'clave'=>'88',
            'categoria'=>'ActividadesAgropecuarias',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Cobras Renrtas por alquiler->32
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Viviendas amuebladas',
            'clave'=>'802',
            'categoria'=>'Rentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>4,
            'tipopersona_id'=>1,
        ]);

         // Cobras Renrtas por alquiler->33
         DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Viviendas no amuebladas',
            'clave'=>'803',
            'categoria'=>'Rentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>4,
            'tipopersona_id'=>1,
        ]);

        // Cobras Renrtas por alquiler->34
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Salones para fiestas y convenciones',
            'clave'=>'804',
            'categoria'=>'Rentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>4,
            'tipopersona_id'=>1,
        ]);


        // Cobras Renrtas por alquiler->35
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Oficinas y locales comerciales',
            'clave'=>'805',
            'categoria'=>'Rentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>4,
            'tipopersona_id'=>1,
        ]);

        // Agicultura->36
        DB::table('actividades')->insert([
            'nombre' => 'Siembra, cultivo y cosecha de soya',
            'clave'=>'1',
            'categoria'=>'Agricultura',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Agicultura->36
        DB::table('actividades')->insert([
            'nombre' => 'Siembra, cultivo y cosecha de cártamo',
            'clave'=>'2',
            'categoria'=>'Agricultura',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Recreativos-37
        DB::table('actividades')->insert([
            'nombre' => 'Cantantes y grupos musicales',
            'clave'=>'1018',
            'categoria'=>'Recreativos',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Recreativos-38
        DB::table('actividades')->insert([
            'nombre' => 'Agentes y representantes de artistas, deportistas y similares ',
            'clave'=>'1027',
            'categoria'=>'Recreativos',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Recreativos-39
        DB::table('actividades')->insert([
            'nombre' => 'Artistas y técnicos independientes',
            'clave'=>'1028',
            'categoria'=>'Recreativos',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Recreativos-40
        DB::table('actividades')->insert([
            'nombre' => 'Artistas y técnicos independientes',
            'clave'=>'1028',
            'categoria'=>'Inmuebles',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);


        // Recreativos-40
        DB::table('actividades')->insert([
            'nombre' => 'Artistas y técnicos independientes',
            'clave'=>'1028',
            'categoria'=>'Inmuebles',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Recreativos-41
        DB::table('actividades')->insert([
            'nombre' => 'Otros servicios relacionados con los servicios inmobiliarios ',
            'clave'=>'812',
            'categoria'=>'Inmuebles',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Inversiones-42
        DB::table('actividades')->insert([
            'nombre' => 'Asesoría en inversiones',
            'clave'=>'719',
            'categoria'=>'Inversiones',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Inversiones-43
        DB::table('actividades')->insert([
            'nombre' => 'Agentes, ajustadores y gestores de seguros de vida',
            'clave'=>'797',
            'categoria'=>'Inversiones',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Inversiones-44
        DB::table('actividades')->insert([
            'nombre' => 'Agentes, ajustadores y gestores de seguros contra riesgos agropecuarios',
            'clave'=>'798',
            'categoria'=>'Inversiones',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Inversiones-45
        DB::table('actividades')->insert([
            'nombre' => 'Agentes, ajustadores y gestores de otros seguros',
            'clave'=>'799',
            'categoria'=>'Inversiones',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>3,
            'tipopersona_id'=>1,
        ]);

        // Cobras Renrtas por alquiler->46
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Teatros, estadios, auditorios y similares',
            'clave'=>'806',
            'categoria'=>'Rentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>4,
            'tipopersona_id'=>1,
        ]);

        // Cobras Renrtas por alquiler->47
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Fincas destinadas a fines agrícolas o ganaderos',
            'clave'=>'807',
            'categoria'=>'Rentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>4,
            'tipopersona_id'=>1,
        ]);

        // Cobras Renrtas por alquiler->48
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Otros inmuebles',
            'clave'=>'808',
            'categoria'=>'Rentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>4,
            'tipopersona_id'=>1,
        ]);

        // Cobras Renrtas por alquiler->49
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de inmuebles para escuelas, colegios de profesionales e instituciones de asistencia y beneficencia o empresas asociaciones u organismos no comerciales',
            'clave'=>'2224',
            'categoria'=>'Rentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>4,
            'tipopersona_id'=>1,
        ]);

         // Dividendos->50
         DB::table('actividades')->insert([
            'nombre' => 'Dividendos',
            'clave'=>'2321',
            'categoria'=>'Dividendos',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>6,
            'tipopersona_id'=>1,
        ]);

        // Intereses por inversiones o depósitos en sistema financiero ->51
        DB::table('actividades')->insert([
            'nombre' => 'Intereses por inversiones o depósitos en sistema financiero ',
            'clave'=>'76',
            'categoria'=>'Intereses',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>7,
            'tipopersona_id'=>1,
        ]);

        //Otros ingresos-> 52
        DB::table('actividades')->insert([
            'nombre' => 'Explotación de concesiones, permisos, autorizaciones o contrat',
            'clave'=>'167',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);
        //Otros ingresos-> 53
        DB::table('actividades')->insert([
            'nombre' => 'Explotación del subsuelo sujetos a regímenes fiscales preferentes',
            'clave'=>'168',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

        //Otros ingresos-> 54
        DB::table('actividades')->insert([
            'nombre' => 'Explotación del subsuelo',
            'clave'=>'169',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

        //Otros ingresos-> 55
        DB::table('actividades')->insert([
            'nombre' => 'Participación en productos del subsuelo sujetos a regímenes fiscales preferentes',
            'clave'=>'170',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

         //Otros ingresos-> 56
         DB::table('actividades')->insert([
            'nombre' => 'Participación en productos del subsuelo ',
            'clave'=>'171',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);


         //Otros ingresos-> 57
         DB::table('actividades')->insert([
            'nombre' => 'Ingresos derivados del otorgamiento de fianzas o avales',
            'clave'=>'800',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

        //Otros ingresos-> 58
        DB::table('actividades')->insert([
            'nombre' => 'Regalías por uso o goce temporal de patentes y franquicias',
            'clave'=>'830',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);


        //Otros ingresos-> 59
        DB::table('actividades')->insert([
            'nombre' => 'Operaciones financieras derivadas en el Mercado Mexicano de Derivados ',
            'clave'=>'875',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

        //Otros ingresos-> 60
        DB::table('actividades')->insert([
            'nombre' => 'Inversiones realizadas en sociedades residentes en el extranjero sin establecimiento en el país ',
            'clave'=>'877',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

        //Otros ingresos-> 61
        DB::table('actividades')->insert([
            'nombre' => 'Ganancia cambiaria y los intereses obtenidos por otros créditos, operaciones o préstamos otorgados',
            'clave'=>'878',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

        //Otros ingresos-> 62
        DB::table('actividades')->insert([
            'nombre' => 'Ganancia cambiaria y los intereses obtenidos por otros créditos, operaciones o préstamos otorgados a residentes en el extranjero ',
            'clave'=>'879',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

         //Otros ingresos-> 63
         DB::table('actividades')->insert([
            'nombre' => 'Dividendos o utilidades distribuidos por sociedades residentes en el extranjero',
            'clave'=>'880',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

         //Otros ingresos-> 64
         DB::table('actividades')->insert([
            'nombre' => 'Remanente distribuible proveniente de personas morales con fines no lucrativos del Impuesto Sobre la Renta',
            'clave'=>'881',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

        //Otros ingresos-> 65
        DB::table('actividades')->insert([
            'nombre' => 'Intereses del extranjero ',
            'clave'=>'882',
            'categoria'=>'Otros',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>8,
            'tipopersona_id'=>1,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales 66
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Viviendas amuebladas ',
            'clave'=>'882',
            'categoria'=>'CobroRentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>2,
            'tipopersona_id'=>1,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales  ->67
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Viviendas no amuebladas',
            'clave'=>'803',
            'categoria'=>'CobroRentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>2,
            'tipopersona_id'=>1,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales  ->68
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Salones para fiestas y convenciones',
            'clave'=>'804',
            'categoria'=>'CobroRentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>2,
            'tipopersona_id'=>1,
        ]);
        //Cobras rentas por el alquiler de casa habitación, oficinas, locales  ->69
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Oficinas y locales comerciales',
            'clave'=>'805',
            'categoria'=>'CobroRentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>2,
            'tipopersona_id'=>1,
        ]);

          //Cobras rentas por el alquiler de casa habitación, oficinas, locales  ->70
          DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Teatros, estadios, auditorios y similares',
            'clave'=>'806',
            'categoria'=>'CobroRentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>2,
            'tipopersona_id'=>1,
        ]);

          //Cobras rentas por el alquiler de casa habitación, oficinas, locales  ->71
          DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Fincas destinadas a fines agrícolas o ganaderos',
            'clave'=>'807',
            'categoria'=>'CobroRentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>2,
            'tipopersona_id'=>1,
        ]);

         //Cobras rentas por el alquiler de casa habitación, oficinas, locales  ->72
         DB::table('actividades')->insert([
            'nombre' => 'Alquiler de Otros inmuebles',
            'clave'=>'808',
            'categoria'=>'CobroRentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>2,
            'tipopersona_id'=>1,
        ]);

        //Cobras rentas por el alquiler de casa habitación, oficinas, locales  ->73
        DB::table('actividades')->insert([
            'nombre' => 'Alquiler de inmuebles para escuelas, colegios de profesionales e instituciones de asistencia y beneficencia o empresas asociaciones u organismos no comerciales',
            'clave'=>'2224',
            'categoria'=>'CobroRentas',
            'tasa_impositiva'=>1.0,
            'regimene_id'=>2,
            'tipopersona_id'=>1,
        ]);

    }
}
