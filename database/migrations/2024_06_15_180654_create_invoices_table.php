<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_invoices_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('rfc_receptor');
            $table->string('nombre_receptor')->nullable();
            $table->string('uso_cfdi');
            $table->string('clave_producto');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->string('unidad');
            $table->decimal('valor_unitario', 8, 2);
            $table->decimal('importe', 8, 2);
            $table->decimal('impuesto', 8, 2);
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
        Schema::dropIfExists('invoices');
    }
}
