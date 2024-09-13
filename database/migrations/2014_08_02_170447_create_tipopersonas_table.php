<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipopersonasTable extends Migration
{
    /**
     * TIPO DE PERSONAS (FISICAS O MORALES)
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipopersonas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
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
        Schema::dropIfExists('tipopersonas');
    }
}
