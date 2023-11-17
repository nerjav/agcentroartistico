<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cedula');
            $table->string('fecha_nacimiento');
            $table->string('sexo');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('encargado');

            //relacion con   la tabla sucursal
            $table->unsignedBigInteger('sucursales_id');
            $table->foreign('sucursales_id')->references('id')->on('sucursales');

            //relacion con   la tabla departamentos
            $table->unsignedBigInteger('departamentos_id');
            $table->foreign('departamentos_id')->references('id')->on('departamentos');

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
        Schema::dropIfExists('estudiantes');
    }
};
