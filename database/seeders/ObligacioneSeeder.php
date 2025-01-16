<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ObligacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar el ISR por servicios profesionales esporádicos.',
            'clave'=>'32',
            'descripcion'=>'Dentro de los 15 días hábiles siguientes a la obtención del ingreso.',
        ]);
        //2
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar anualmente el ISR. Personas Físicas',
            'clave'=>'3',
            'descripcion'=>'A más tardar el 30 de abril del ejercicio siguiente.',
        ]);
        //3
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar mensualmente el IVA.',
            'clave'=>'9',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al periodo que corresponda.',
        ]);
        //4
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar mensualmente el ISR por Sueldos y Salarios.',
            'clave'=>'19',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al periodo que corresponda.',
        ]);
        //5
        DB::table('obligaciones')->insert([
            'nombre' => 'Presentar la declaración y pago provisional mensual de retenciones de Impuesto Sobre la Renta (ISR) por sueldos y salarios.',
            'clave'=>'20',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al periodo que corresponda.',
        ]);
        //6
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar mensualmente el ISR por Servicios Profesionales.',
            'clave'=>'31',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al periodo que corresponda.',
        ]);
        //7
        DB::table('obligaciones')->insert([
            'nombre' => 'nformar mensualmente sobre las operaciones con proveedores para efectos del Impuesto al Valor Agregado (IVA).',
            'clave'=>'579',
            'descripcion'=>'A más tardar el último día del mes inmediato posterior al periodo que corresponda.',
        ]);
        //8
        DB::table('obligaciones')->insert([
            'nombre' => 'Presentar la declaración y pago provisional mensual de Impuesto Sobre la Renta (ISR) por las retenciones realizadas a los trabajadores asimilados a salarios.',
            'clave'=>'27',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al periodo que corresponda.',
        ]);
        //9
        DB::table('obligaciones')->insert([
            'nombre' => 'Presentar la declaración y pago de Impuesto al Valor Agregado (IVA) cuando se enajene un bien o se preste un servicio de manera accidental por única vez.',
            'clave'=>'78',
            'descripcion'=>'15 días hábiles siguientes a aquél en que se venda el bien o preste el servicio',
        ]);
        //10
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar mensualmente el ISR. Régimen de Arrendamiento.',
            'clave'=>'2',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al periodo que corresponda.',
        ]);
        //11
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar mensualmente el ISR por actividades empresariales.',
            'clave'=>'33',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al periodo que corresponda.',
        ]);
        //12
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar trimestralmente el ISR. Régimen de Arrendamiento.',
            'clave'=>'734',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al trimestre que corresponda el pago',
        ]);

        //13
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar trimestralmente el IVA.',
            'clave'=>'740',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al trimestre que corresponda.',
        ]);

        //14
        DB::table('obligaciones')->insert([
            'nombre' => 'Presentar la declaración y pago de Impuesto al Valor Agregado (IVA) cuando se enajene un bien o se preste un servicio de manera accidental por única vez.',
            'clave'=>'78',
            'descripcion'=>'15 días hábiles siguientes a aquél en que se venda el bien o preste el servicio',
        ]);

        //15
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar el ISR. Régimen de Demás Ingresos esporádicos.',
            'clave'=>'59',
            'descripcion'=>'Quince días hábiles después de obtenido el ingreso',
        ]);
        //16
        DB::table('obligaciones')->insert([
            'nombre' => 'Presentar la declaración anual de Impuesto Sobre la Renta (ISR) donde se informe sobre los ingresos en regímenes fiscales preferentes. (Empresas multinacionales).',
            'clave'=>'204',
            'descripcion'=>'En el mes de febrero de cada año',
        ]);

        //17
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar anualmente el ISR. Inversiones en regímenes fiscales preferentes.',
            'clave'=>'73',
            'descripcion'=>'Conjuntamente con la declaración anual del ejercicio',
        ]);

        //18
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar mensualmente el ISR. Régimen de Demás Ingresos.',
            'clave'=>'58',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al periodo que corresponda.',
        ]);
        //19
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar semestralmente el ISR por Intereses y ganancia cambiaria. Demás ingresos.',
            'clave'=>'60',
            'descripcion'=>'En los meses de julio del mismo ejercicio y enero del siguiente',
        ]);

        //20
        DB::table('obligaciones')->insert([
            'nombre' => 'Ajuste anual de ISR correspondiente a la declaración anual. Régimen Simplificado de Confianza.',
            'clave'=>'842',
            'descripcion'=>'A más tardar el día 30 del mes de abril del ejercicio siguiente',
        ]);
        //21
        DB::table('obligaciones')->insert([
            'nombre' => 'Pago provisional mensual de ISR. Régimen Simplificado de Confianza.',
            'clave'=>'841',
            'descripcion'=>'A más tardar el día 17 del mes de calendario inmediato posterior a aquél al que corresponda el pago',
        ]);
        //22
        DB::table('obligaciones')->insert([
            'nombre' => 'Declarar mensualmente el IVA.',
            'clave'=>'849',
            'descripcion'=>'A más tardar el día 17 del mes inmediato posterior al periodo que corresponda.',
        ]);

        DB::table('obligaciones')->insert([
            'nombre' => '',
            'clave'=>'',
            'descripcion'=>'',
        ]);

        DB::table('obligaciones')->insert([
            'nombre' => '',
            'clave'=>'',
            'descripcion'=>'',
        ]);

    }
}
