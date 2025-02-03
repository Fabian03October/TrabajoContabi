<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Aceites y grasas comestibles',
            'clase' => '50151600 - Grasas y aceites animales comestibles',
        ]);
        //2
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Aceites y grasas comestibles',
            'clase' => '50151500 - Grasas y aceites vegetales comestibles',
        ]);

        //3
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Alimentos preparados y conservados',
            'clase' => '50192600 - Acompañamientos preparados',
        ]);

        //4
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Alimentos preparados y conservados',
            'clase' => '50193100 - Materiales y mezclas instantáneas',
        ]);
        //5
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Bebidas',
            'clase' => '50202200 - Bebidas alcohólicas (Bebidas fermentadas y destiladas)',
        ]);
        //6
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Bebidas',
            'clase' => '50202300 - Bebidas no alcohólicas',
        ]);

        //7
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Bebidas',
            'clase' => '50201700 - Café y té',
        ]);

        //8
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Chocolates, azúcares, edulcorantes y productos de confitería',
            'clase' => '50161500 - Chocolates, azúcares, edulcorantes productos',
        ]);

        //9
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Chocolates, azúcares, edulcorantes y productos de confitería',
            'clase' => '50161800 - Productos de confitería',
        ]);

         //10
         DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Chocolates, azúcares, edulcorantes y productos de confitería',
            'clase' => '50161800 - Productos de confitería',
        ]);

        //11
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Condimentos y conservantes',
            'clase' => '50171500 - Hierbas y especias y extractos',
        ]);

         //12
         DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Condimentos y conservantes',
            'clase' => '50172000 - Productos de fríjol de soya fermentados',
        ]);

        //13
        DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Fruta congelada',
            'clase' => '50347200 - Aceitunas congeladas',
        ]);


         //14
         DB::table('categoriaservicios')->insert([
            'tipo' => 'Productos',
            'division' => 'Alimentos, Bebidas y Tabaco',
            'grupo' => 'Fruta congelada',
            'clase' => '50342200 - Agrás congeladas (Frutos azules del bosque congelados)',
        ]);


        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);

        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);

        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);

        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);

        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);

        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);

        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);

        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);

        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);

        DB::table('categoriaservicios')->insert([
            'tipo' => '',
            'division' => '',
            'grupo' => '',
            'clase' => '',
        ]);
    }
}
