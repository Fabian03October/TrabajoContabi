<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegimeneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regimenes')->insert([
            'nombre' => 'Régimen general de ley',
            'descripcion'=>'',
            'tipopersona_id'=>1
        ]);

        DB::table('regimenes')->insert([
            'nombre' => 'Regimen simplificado de confianza (RESICO)',
            'descripcion'=>'',
            'tipopersona_id'=>1
        ]);

        // DB::table('regimenes')->insert([
        //     'nombre' => 'Régimen general de ley',
        //     'descripcion'=>'',
        //     'tipopersona_id'=>
        // ]);

        // DB::table('regimenes')->insert([
        //     'nombre' => 'Régimen general de ley',
        //     'descripcion'=>'',
        //     'tipopersona_id'=>
        // ]);

        // DB::table('regimenes')->insert([
        //     'nombre' => 'Régimen general de ley',
        //     'descripcion'=>'',
        //     'tipopersona_id'=>
        // ]);

        // DB::table('regimenes')->insert([
        //     'nombre' => 'Régimen general de ley',
        //     'descripcion'=>'',
        //     'tipopersona_id'=>
        // ]);
    }
}
