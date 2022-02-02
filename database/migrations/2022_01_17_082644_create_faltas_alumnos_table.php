<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaltasAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faltas_alumnos', function (Blueprint $table) {
            $table->id('idfaltasalumno');
            $table->bigInteger('alumno');
            $table->boolean('asiste')->nullable();
            $table->boolean('retraso')->nullable();
            $table->boolean('justificada')->nullable();
            $table->foreign('periodoclase_id')->references('id')->on('periodosclases');
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
        Schema::dropIfExists('faltas_alumnos');
    }
}
