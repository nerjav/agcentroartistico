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
        Schema::create('planclases', function (Blueprint $table) {
            $table->id();
            $table->string('dia_clases');

            //relacion con   la tabla Sucursales
            $table->unsignedBigInteger('sucursales_id');
            $table->foreign('sucursales_id')->references('id')->on('sucursales');

            //relacion con   la tabla instructor
            $table->unsignedBigInteger('instructor_id');
            $table->foreign('instructor_id')->references('id')->on('instructor');

            //relacion con   la tabla Sucursales
            $table->unsignedBigInteger('academias_id');
            $table->foreign('academias_id')->references('id')->on('academias');


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
        Schema::dropIfExists('planclases');
    }
};
