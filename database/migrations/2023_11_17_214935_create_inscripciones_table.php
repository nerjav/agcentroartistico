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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->string('traslado');
            $table->string('fecha');
            $table->string('estado');



                      //relacion con estudiantes
                      $table->unsignedBigInteger('estudiantes_id');
                      $table->foreign('estudiantes_id')->references('id')->on('estudiantes');

               //relacion con cursos
               $table->unsignedBigInteger('cursos_id');
               $table->foreign('cursos_id')->references('id')->on('cursos');

                //relacion con cursos
                $table->unsignedBigInteger('academias_id');
                $table->foreign('academias_id')->references('id')->on('academias');

                         //relacion con sucursales
                         $table->unsignedBigInteger('sucursales_id');
                         $table->foreign('sucursales_id')->references('id')->on('sucursales');


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
        Schema::dropIfExists('inscripciones');
    }
};
