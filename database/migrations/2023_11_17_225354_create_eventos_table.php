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
        Schema::create('eventosclases', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('fecha');
            $table->string('direccion');

                //relacion con   la tabla academias
                $table->unsignedBigInteger('academias_id');
                $table->foreign('academias_id')->references('id')->on('academias');


                //relacion con   la tabla academias
                $table->unsignedBigInteger('estudiantes_id');
                $table->foreign('estudiantes_id')->references('id')->on('estudiantes');

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
        Schema::dropIfExists('eventosclases');
    }
};
