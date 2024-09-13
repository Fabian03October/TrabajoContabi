<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tipopersonas')->insert([
            'nombre' => 'Persona Física',
        ]);
        DB::table('tipopersonas')->insert([
            'nombre' => 'Persona Moral',
        ]);
    }
}
