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
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
               //relacion con   barrios
               $table->unsignedBigInteger('barrios_id');
               $table->foreign('barrios_id')->references('id')->on('barrios');

                     //relacion con ciudades
            $table->unsignedBigInteger('ciudades_id');
            $table->foreign('ciudades_id')->references('id')->on('ciudades');


                  //relacion con  departamentos
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
        Schema::dropIfExists('sucursales');
    }
};
