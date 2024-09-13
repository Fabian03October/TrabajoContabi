<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            $table->integer('cp');
            $table->string('nombre_vialidad');
            $table->string('tipo_vialidad')->nullable();
            $table->string('num_interior');
            $table->string('num_exterior');
            $table->string('colonia');
            $table->string('localidad')->nullable();
            $table->string('municipio')->nullable();
            $table->string('entidad')->nullable();
            $table->string('entre_calle1')->nullable();
            $table->string('entre_calle2')->nullable();
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
        Schema::dropIfExists('domicilios');
    }
}
