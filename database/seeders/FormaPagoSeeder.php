<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formapagos')->insert([
            'nombre' => 'Por definir',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Efectivo',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Cheque Nomitativo',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Transferencia electronica de fondos',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Tarjeta de credito',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Monedero electronico',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Dinero electronico',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'vales de despensa',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Dacción en pagos',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Monedero electronico',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Dinero electronico',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'vales de despensa',
        ]);
        DB::table('formapagos')->insert([
            'nombre' => 'Dacción en pagos',
        ]);
    }
}
