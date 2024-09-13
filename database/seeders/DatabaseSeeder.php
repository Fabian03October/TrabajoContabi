<?php

namespace Database\Seeders;

use App\Models\Regimene;
use App\Models\Tipopersona;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            TipoPersonaSeeder::class,
            RegimeneSeeder::class,
            ActividadeSeeder::class,
            TipoIngresoSeeder::class,
        ]);
    }
}
