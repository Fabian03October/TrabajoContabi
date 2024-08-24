<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido_p')->nullable();
            $table->string('apellido_m')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfc')->unique()->nullable();
            $table->date('FechaIniOP')->nullable(); // fecha de inscripción a un regimen
            $table->date('fechaUltiCamEst')->nullable();//fecha de preinscripcion
            $table->string('NombreComercial')->nullable();
            $table->string('sexo')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->boolean('status');//Estado para poner rfc
            $table->boolean('status_padron');//esto se pone ACTIVO cuando esta en un regimen
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('domicilio_id') ->nullable()->constrained();
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
        Schema::dropIfExists('users');
    }
}
