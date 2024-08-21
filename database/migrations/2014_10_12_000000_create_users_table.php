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
            $table->date('FechaIniOP')->nullable(); // Cambiado de fecha_nacimiento a FechaIniOP
            $table->date('fechaUltiCamEst')->nullable();
            $table->string('NombreComercial')->nullable();
            $table->boolean('status');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
