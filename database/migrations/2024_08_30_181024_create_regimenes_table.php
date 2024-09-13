<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegimenesTable extends Migration
{
    /**
     * TIPO DE REGIMEN SEGUN EL TIPO DE PERSONA
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regimenes', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->text('descripcion');
            $table->foreignId('tipopersona_id') ->nullable()->constrained();
            // $table->string('obligacion');
            // $table->decimal('tasa_impositiva');
            // $table->string('periocidad_pago');
            // $table->string('tipo_contribuyente');
            // $table->text('deducciones_permitidas');
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
        Schema::dropIfExists('regimenes');
    }
}
