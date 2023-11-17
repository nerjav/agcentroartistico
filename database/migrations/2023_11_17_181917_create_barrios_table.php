<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barrios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
                      //relacion con sucursales
                      $table->unsignedBigInteger('sucursales_id');
                      $table->foreign('sucursales_id')->references('id')->on('sucursales');
 //relacion con ciudades
            $table->unsignedBigInteger('ciudades_id');
            $table->foreign('ciudades_id')->references('id')->on('ciudades');
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
        Schema::dropIfExists('barrios');
    }
}
