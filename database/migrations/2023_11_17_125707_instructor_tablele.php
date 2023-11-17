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
        //
        Schema::create('instructor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('director_responsable');
            $table->string('especialidad');
            $table->string('email');
            $table->string('reg_prof');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
