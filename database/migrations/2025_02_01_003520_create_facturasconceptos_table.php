<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasconceptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturasconceptos', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->string('no_identificacion');
            $table->text('descripcion');
            $table->string('unidad');
            $table->decimal('valor_unitario');
            $table->decimal('importe');
            $table->decimal('descuento');
            $table->foreignId('ob_impuestos_id') ->nullable()->constrained();
            $table->foreignId('servicio_id') ->nullable()->constrained();
            $table->foreignId('factura_id') ->nullable()->constrained();
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
        Schema::dropIfExists('facturasconceptos');
    }
}
