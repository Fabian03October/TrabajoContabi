<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * ACTIVIDADES ECONOMICAS
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('clave');
            $table->text('descripcion');
            $table->String('categoria');
            $table->string('obligacion');
            $table->decimal('tasa_impositiva');
            $table->string('periocidad_pago');
            $table->foreignId('regimene_id') ->nullable()->constrained();
            $table->foreignId('tipopersona_id') ->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
