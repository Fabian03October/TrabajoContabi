<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->text('folio_fiscal');
            $table->string('no_serie');
            $table->integer('folio');
            $table->string('serie');
            $table->string('efecto_comprobate');
            $table->string('uso_cfdi');
            $table->string('metodo_pago');
            $table->string('moneda');
            $table->integer('cp');
            $table->boolean('sellado');
            $table->foreignId('id_forma_pago')->nullable()->constrained('formapagos')->onDelete('cascade');
            // Relaciones con usuarios
            $table->foreignId('id_user_emisor')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('id_user_receptor')->nullable()->constrained('users')->onDelete('cascade');

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
        Schema::dropIfExists('facturas');
    }
}
