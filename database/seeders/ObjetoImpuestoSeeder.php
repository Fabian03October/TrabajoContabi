<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjetoImpuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ob_impuestos')->insert([
            'nombre' => 'No objeto de impuesto.',
        ]);
        DB::table('ob_impuestos')->insert([
            'nombre' => 'Si objeto de impuesto.',
        ]);
        DB::table('ob_impuestos')->insert([
            'nombre' => 'Si objeto de impuesto y no obligados al desgloce',
        ]);
        DB::table('ob_impuestos')->insert([
            'nombre' => 'No objeto de impuesto y no a causa de impuesto.',
        ]);
        DB::table('ob_impuestos')->insert([
            'nombre' => 'No objeto de impuesto, IVA crédito PODEBI.',
        ]);
    }
}
